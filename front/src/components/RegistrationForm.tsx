import { useState, useRef } from "react";
import { Dialog, DialogContent, DialogHeader, DialogTitle } from "./ui/dialog";
import { Button } from "./ui/button";
import { Input } from "./ui/input";
import { Textarea } from "./ui/textarea";
import { Label } from "./ui/label";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "./ui/select";
import { UserPlus, Loader2, Upload, FileCheck, X } from "lucide-react";
import { toast } from "@/hooks/use-toast";

interface RegistrationFormProps {
  isOpen: boolean;
  onClose: () => void;
  onSuccess: () => void;
  requiresReceipt?: boolean;
}

const countries = [
  "Argentina", "Bolivia", "Chile", "Colombia", "Costa Rica", "Cuba", "Ecuador",
  "El Salvador", "España", "Guatemala", "Honduras", "México", "Nicaragua",
  "Panamá", "Paraguay", "Perú", "Puerto Rico", "República Dominicana",
  "Uruguay", "Venezuela", "Otro"
];

export const RegistrationForm = ({ isOpen, onClose, onSuccess, requiresReceipt = false }: RegistrationFormProps) => {
  const [isSubmitting, setIsSubmitting] = useState(false);
  const [receiptFile, setReceiptFile] = useState<File | null>(null);
  const [receiptPreview, setReceiptPreview] = useState<string | null>(null);
  const fileInputRef = useRef<HTMLInputElement>(null);
  
  const [formData, setFormData] = useState({
    firstName: "",
    lastName: "",
    email: "",
    phone: "",
    country: "",
    comments: ""
  });

  const handleFileChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    const file = e.target.files?.[0];
    if (file) {
      // Validate file type
      const validTypes = ['image/jpeg', 'image/png', 'image/webp', 'application/pdf'];
      if (!validTypes.includes(file.type)) {
        toast({
          title: "Archivo no válido",
          description: "Por favor sube una imagen (JPG, PNG, WebP) o PDF.",
          variant: "destructive"
        });
        return;
      }
      
      // Validate file size (max 5MB)
      if (file.size > 5 * 1024 * 1024) {
        toast({
          title: "Archivo muy grande",
          description: "El archivo debe ser menor a 5MB.",
          variant: "destructive"
        });
        return;
      }
      
      setReceiptFile(file);
      
      // Create preview for images
      if (file.type.startsWith('image/')) {
        const reader = new FileReader();
        reader.onloadend = () => {
          setReceiptPreview(reader.result as string);
        };
        reader.readAsDataURL(file);
      } else {
        setReceiptPreview(null);
      }
    }
  };

  const removeFile = () => {
    setReceiptFile(null);
    setReceiptPreview(null);
    if (fileInputRef.current) {
      fileInputRef.current.value = '';
    }
  };

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    
    // Validation
    if (!formData.firstName.trim() || !formData.lastName.trim()) {
      toast({
        title: "Campos requeridos",
        description: "Por favor completa tu nombre y apellido.",
        variant: "destructive"
      });
      return;
    }
    
    if (!formData.email.trim() || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(formData.email)) {
      toast({
        title: "Email inválido",
        description: "Por favor ingresa un email válido.",
        variant: "destructive"
      });
      return;
    }
    
    if (!formData.phone.trim()) {
      toast({
        title: "Teléfono requerido",
        description: "Por favor ingresa tu número de teléfono o WhatsApp.",
        variant: "destructive"
      });
      return;
    }
    
    if (!formData.country) {
      toast({
        title: "País requerido",
        description: "Por favor selecciona tu país.",
        variant: "destructive"
      });
      return;
    }

    // Validate receipt if required
    if (requiresReceipt && !receiptFile) {
      toast({
        title: "Comprobante requerido",
        description: "Por favor sube tu comprobante de pago.",
        variant: "destructive"
      });
      return;
    }

    setIsSubmitting(true);
    
    // Simulate API call
    await new Promise(resolve => setTimeout(resolve, 1500));
    
    setIsSubmitting(false);
    onSuccess();
    
    // Reset form
    setFormData({
      firstName: "",
      lastName: "",
      email: "",
      phone: "",
      country: "",
      comments: ""
    });
    setReceiptFile(null);
    setReceiptPreview(null);
  };

  return (
    <Dialog open={isOpen} onOpenChange={onClose}>
      <DialogContent className="sm:max-w-md bg-card border-border max-h-[90vh] overflow-y-auto">
        <DialogHeader>
          <DialogTitle className="font-display text-2xl flex items-center gap-3">
            <div className="w-10 h-10 rounded-xl bg-secondary/20 flex items-center justify-center">
              <UserPlus className="h-5 w-5 text-secondary" />
            </div>
            {requiresReceipt ? "Confirmar pago" : "Completa tu reserva"}
          </DialogTitle>
        </DialogHeader>
        
        <form onSubmit={handleSubmit} className="space-y-4 py-4">
          <div className="grid grid-cols-2 gap-4">
            <div className="space-y-2">
              <Label htmlFor="firstName">Nombre *</Label>
              <Input
                id="firstName"
                placeholder="Tu nombre"
                value={formData.firstName}
                onChange={(e) => setFormData(prev => ({ ...prev, firstName: e.target.value }))}
                className="bg-muted border-border"
                maxLength={50}
              />
            </div>
            <div className="space-y-2">
              <Label htmlFor="lastName">Apellido *</Label>
              <Input
                id="lastName"
                placeholder="Tu apellido"
                value={formData.lastName}
                onChange={(e) => setFormData(prev => ({ ...prev, lastName: e.target.value }))}
                className="bg-muted border-border"
                maxLength={50}
              />
            </div>
          </div>
          
          <div className="space-y-2">
            <Label htmlFor="email">Email *</Label>
            <Input
              id="email"
              type="email"
              placeholder="tu@email.com"
              value={formData.email}
              onChange={(e) => setFormData(prev => ({ ...prev, email: e.target.value }))}
              className="bg-muted border-border"
              maxLength={100}
            />
          </div>
          
          <div className="space-y-2">
            <Label htmlFor="phone">Teléfono / WhatsApp *</Label>
            <Input
              id="phone"
              type="tel"
              placeholder="+1 234 567 8900"
              value={formData.phone}
              onChange={(e) => setFormData(prev => ({ ...prev, phone: e.target.value }))}
              className="bg-muted border-border"
              maxLength={20}
            />
          </div>
          
          <div className="space-y-2">
            <Label htmlFor="country">País *</Label>
            <Select 
              value={formData.country} 
              onValueChange={(value) => setFormData(prev => ({ ...prev, country: value }))}
            >
              <SelectTrigger className="bg-muted border-border">
                <SelectValue placeholder="Selecciona tu país" />
              </SelectTrigger>
              <SelectContent className="bg-card border-border max-h-60">
                {countries.map((country) => (
                  <SelectItem key={country} value={country}>
                    {country}
                  </SelectItem>
                ))}
              </SelectContent>
            </Select>
          </div>

          {/* Receipt upload - only shown when requiresReceipt is true */}
          {requiresReceipt && (
            <div className="space-y-2">
              <Label>Comprobante de pago *</Label>
              <div className="relative">
                {receiptFile ? (
                  <div className="rounded-xl bg-muted/50 border border-border p-4">
                    <div className="flex items-center gap-3">
                      {receiptPreview ? (
                        <img 
                          src={receiptPreview} 
                          alt="Preview" 
                          className="w-16 h-16 object-cover rounded-lg"
                        />
                      ) : (
                        <div className="w-16 h-16 bg-primary/10 rounded-lg flex items-center justify-center">
                          <FileCheck className="h-8 w-8 text-primary" />
                        </div>
                      )}
                      <div className="flex-1 min-w-0">
                        <p className="text-sm font-medium text-foreground truncate">
                          {receiptFile.name}
                        </p>
                        <p className="text-xs text-muted-foreground">
                          {(receiptFile.size / 1024).toFixed(1)} KB
                        </p>
                      </div>
                      <Button
                        type="button"
                        variant="ghost"
                        size="icon"
                        onClick={removeFile}
                        className="shrink-0"
                      >
                        <X className="h-4 w-4" />
                      </Button>
                    </div>
                  </div>
                ) : (
                  <label className="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed border-border rounded-xl cursor-pointer bg-muted/30 hover:bg-muted/50 transition-colors">
                    <div className="flex flex-col items-center justify-center pt-5 pb-6">
                      <Upload className="h-8 w-8 text-muted-foreground mb-2" />
                      <p className="text-sm text-muted-foreground">
                        <span className="font-medium text-primary">Haz clic</span> o arrastra tu comprobante
                      </p>
                      <p className="text-xs text-muted-foreground mt-1">
                        JPG, PNG, WebP o PDF (max. 5MB)
                      </p>
                    </div>
                    <input
                      ref={fileInputRef}
                      type="file"
                      className="hidden"
                      accept="image/jpeg,image/png,image/webp,application/pdf"
                      onChange={handleFileChange}
                    />
                  </label>
                )}
              </div>
            </div>
          )}
          
          <div className="space-y-2">
            <Label htmlFor="comments">Comentarios (opcional)</Label>
            <Textarea
              id="comments"
              placeholder="¿Tienes alguna pregunta o comentario?"
              value={formData.comments}
              onChange={(e) => setFormData(prev => ({ ...prev, comments: e.target.value }))}
              className="bg-muted border-border resize-none"
              rows={3}
              maxLength={500}
            />
          </div>
          
          <p className="text-xs text-muted-foreground">
            * Campos obligatorios. Tu información está protegida y no será compartida.
          </p>
          
          <div className="flex flex-col gap-3 pt-2">
            <Button 
              type="submit"
              size="lg" 
              disabled={isSubmitting}
              className="w-full glow-green hover:scale-[1.02] transition-all duration-300"
            >
              {isSubmitting ? (
                <>
                  <Loader2 className="mr-2 h-4 w-4 animate-spin" />
                  Procesando...
                </>
              ) : (
                requiresReceipt ? "Enviar comprobante" : "Confirmar reserva"
              )}
            </Button>
            <Button 
              type="button"
              variant="ghost" 
              onClick={onClose}
              disabled={isSubmitting}
              className="w-full text-muted-foreground hover:text-foreground"
            >
              Cancelar
            </Button>
          </div>
        </form>
      </DialogContent>
    </Dialog>
  );
};