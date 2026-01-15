import { Dialog, DialogContent, DialogHeader, DialogTitle } from "./ui/dialog";
import { Button } from "./ui/button";
import { QrCode, ArrowRight, Copy, CheckCircle2 } from "lucide-react";
import { useState } from "react";
import { toast } from "@/hooks/use-toast";

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

  // Payment details - these would be configurable
  const paymentDetails = {
    amount: "$497 USD",
    reference: "CODY-TRADER-2024",
    wallet: "0x1234...5678", // Example wallet address
  };

  const handleCopyReference = () => {
    navigator.clipboard.writeText(paymentDetails.reference);
    setCopied(true);
    toast({
      title: "Copiado",
      description: "Referencia copiada al portapapeles",
    });
    setTimeout(() => setCopied(false), 2000);
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
          {/* Amount */}
          <div className="text-center py-4 rounded-xl bg-muted/50 border border-border">
            <p className="text-sm text-muted-foreground mb-1">Monto a pagar</p>
            <p className="text-3xl font-display font-bold text-primary">
              {paymentDetails.amount}
            </p>
          </div>

          {/* QR Code placeholder */}
          <div className="flex flex-col items-center gap-4">
            <div className="w-48 h-48 bg-white rounded-xl p-4 flex items-center justify-center border border-border">
              {/* Placeholder QR - in production this would be a real QR code */}
              <div className="w-full h-full bg-gradient-to-br from-muted to-muted/50 rounded-lg flex items-center justify-center">
                <QrCode className="h-24 w-24 text-foreground/20" />
              </div>
            </div>
            <p className="text-sm text-muted-foreground text-center">
              Escanea el código QR para realizar el pago
            </p>
          </div>

          {/* Reference */}
          <div className="rounded-xl bg-muted/50 border border-border p-4">
            <p className="text-sm text-muted-foreground mb-2">
              Referencia de pago:
            </p>
            <div className="flex items-center justify-between gap-2">
              <code className="text-sm font-mono text-foreground bg-background px-3 py-2 rounded-lg flex-1">
                {paymentDetails.reference}
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
        </div>
      </DialogContent>
    </Dialog>
  );
};
