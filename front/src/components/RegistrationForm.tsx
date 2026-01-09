import { useState } from "react";
import { Dialog, DialogContent, DialogHeader, DialogTitle } from "./ui/dialog";
import { Button } from "./ui/button";
import { Input } from "./ui/input";
import { Textarea } from "./ui/textarea";
import { Label } from "./ui/label";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "./ui/select";
import { UserPlus, Loader2 } from "lucide-react";
import { toast } from "@/hooks/use-toast";

interface RegistrationFormProps {
  isOpen: boolean;
  onClose: () => void;
  onSuccess: () => void;
}

const countries = [
  "Argentina", "Bolivia", "Chile", "Colombia", "Costa Rica", "Cuba", "Ecuador",
  "El Salvador", "España", "Guatemala", "Honduras", "México", "Nicaragua",
  "Panamá", "Paraguay", "Perú", "Puerto Rico", "República Dominicana",
  "Uruguay", "Venezuela", "Otro"
];

export const RegistrationForm = ({ isOpen, onClose, onSuccess }: RegistrationFormProps) => {
  const [isSubmitting, setIsSubmitting] = useState(false);
  const [formData, setFormData] = useState({
    firstName: "",
    lastName: "",
    email: "",
    phone: "",
    country: "",
    comments: ""
  });

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
  };

  return (
    <Dialog open={isOpen} onOpenChange={onClose}>
      <DialogContent className="sm:max-w-md bg-card border-border">
        <DialogHeader>
          <DialogTitle className="font-display text-2xl flex items-center gap-3">
            <div className="w-10 h-10 rounded-xl bg-secondary/20 flex items-center justify-center">
              <UserPlus className="h-5 w-5 text-secondary" />
            </div>
            Completa tu reserva
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
                "Confirmar reserva"
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
