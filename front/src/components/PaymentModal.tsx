import { Dialog, DialogContent, DialogHeader, DialogTitle } from "./ui/dialog";
import { Button } from "./ui/button";
import { QrCode, ArrowRight, Copy, CheckCircle2, Loader2 } from "lucide-react";
import { useState, useEffect } from "react";
import { toast } from "@/hooks/use-toast";
import { api, CourseContent, MedioPago } from "@/lib/api";

interface PaymentModalProps {
  isOpen: boolean;
  onClose: () => void;
  onProceedToForm: () => void;
}

export const PaymentModal = ({
  isOpen,
  onClose,
  onProceedToForm,
}: PaymentModalProps) => {
  const [copied, setCopied] = useState(false);
  const [loading, setLoading] = useState(true);
  const [courseContent, setCourseContent] = useState<CourseContent | null>(null);
  const [paymentMethod, setPaymentMethod] = useState<MedioPago | null>(null);

  useEffect(() => {
    if (isOpen) {
      loadCourseContent();
    }
  }, [isOpen]);

  const loadCourseContent = async () => {
    try {
      setLoading(true);
      const [contentResponse, paymentResponse] = await Promise.all([
        api.getCourseContents(),
        api.getMediosPagos(),
      ]);

      if (contentResponse.data && contentResponse.data.length > 0) {
        setCourseContent(contentResponse.data[0]);
      }

      if (paymentResponse.data && paymentResponse.data.length > 0) {
        setPaymentMethod(paymentResponse.data[0]);
      }
    } catch (error) {
      console.error("Error loading course content:", error);
      toast({
        title: "Error",
        description: "No se pudo cargar la información del pago.",
        variant: "destructive"
      });
    } finally {
      setLoading(false);
    }
  };

  const handleCopyReference = () => {
    if (courseContent) {
      // In a real app we might get payment reference from API too
      navigator.clipboard.writeText(paymentMethod?.reference_code || "");
      setCopied(true);
      toast({
        title: "Copiado",
        description: "Referencia copiada al portapapeles",
      });
      setTimeout(() => setCopied(false), 2000);
    }
  };

  return (
    <Dialog open={isOpen} onOpenChange={onClose}>
      <DialogContent className="sm:max-w-md bg-card border-border">
        <DialogHeader>
          <DialogTitle className="font-display text-2xl flex items-center gap-3">
            <div className="w-10 h-10 rounded-xl bg-primary/20 flex items-center justify-center">
              <QrCode className="h-5 w-5 text-primary" />
            </div>
            Realizar pago
          </DialogTitle>
        </DialogHeader>

        <div className="space-y-6 py-4">
          {loading ? (
            <div className="flex flex-col items-center justify-center py-10 space-y-4">
              <Loader2 className="h-8 w-8 animate-spin text-primary" />
              <p className="text-sm text-muted-foreground">Cargando información de pago...</p>
            </div>
          ) : courseContent ? (
            <>
              {/* Amount */}
              <div className="text-center py-4 rounded-xl bg-muted/50 border border-border">
                <p className="text-sm text-muted-foreground mb-1">Monto a pagar</p>
                <p className="text-3xl font-display font-bold text-primary">
                  ${courseContent.price} {courseContent.currency}
                </p>
              </div>

              {/* QR Code placeholder */}
              <div className="flex flex-col items-center gap-4">
                <div className="w-48 h-48 bg-white rounded-xl p-4 flex items-center justify-center border border-border">
                  {/* Placeholder QR - in production this would be a real QR code */}
                  {paymentMethod?.qr_pay ? (
                    <img
                      src={paymentMethod.qr_pay}
                      alt="QR Pago"
                      className="w-full h-full object-contain"
                    />
                  ) : (
                    <div className="w-full h-full bg-gradient-to-br from-muted to-muted/50 rounded-lg flex items-center justify-center">
                      <QrCode className="h-24 w-24 text-foreground/20" />
                    </div>
                  )}
                </div>
                <p className="text-sm text-muted-foreground text-center">
                  Escanead el código QR para realizar el pago
                </p>
              </div>

              {/* Reference */}
              <div className="rounded-xl bg-muted/50 border border-border p-4">
                <p className="text-sm text-muted-foreground mb-2">
                  Referencia de pago:
                </p>
                <div className="flex items-center justify-between gap-2">
                  <code className="text-sm font-mono text-foreground bg-background px-3 py-2 rounded-lg flex-1">
                    {paymentMethod?.reference_code || "Cargando..."}
                  </code>
                  <Button
                    size="sm"
                    variant="ghost"
                    onClick={handleCopyReference}
                    className="shrink-0"
                  >
                    {copied ? (
                      <CheckCircle2 className="h-4 w-4 text-primary" />
                    ) : (
                      <Copy className="h-4 w-4" />
                    )}
                  </Button>
                </div>
              </div>

              {/* Instructions */}
              <div className="space-y-2 text-sm text-muted-foreground">
                <p className="font-medium text-foreground">Instrucciones:</p>
                <ol className="list-decimal list-inside space-y-1">
                  <li>Escanea el código QR o copia la referencia</li>
                  <li>Realiza el pago por el monto indicado</li>
                  <li>Guarda el comprobante de pago</li>
                  <li>Haz clic en "Continuar" y sube tu comprobante</li>
                </ol>
              </div>

              <div className="flex flex-col gap-3 pt-2">
                <Button
                  size="lg"
                  onClick={onProceedToForm}
                  className="w-full glow-green hover:scale-[1.02] transition-all duration-300"
                >
                  Ya realicé el pago
                  <ArrowRight className="ml-2 h-4 w-4" />
                </Button>
                <Button
                  variant="ghost"
                  onClick={onClose}
                  className="w-full text-muted-foreground hover:text-foreground"
                >
                  Volver
                </Button>
              </div>
            </>
          ) : (
            <div className="text-center py-10">
              <p className="text-muted-foreground">No se encontró información de pago.</p>
            </div>
          )}
        </div>
      </DialogContent>
    </Dialog>
  );
};
