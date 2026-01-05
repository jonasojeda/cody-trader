import { Dialog, DialogContent } from "./ui/dialog";
import { Button } from "./ui/button";
import { CheckCircle2, Home, Mail, MessageSquare } from "lucide-react";

interface ConfirmationModalProps {
  isOpen: boolean;
  onClose: () => void;
}

export const ConfirmationModal = ({ isOpen, onClose }: ConfirmationModalProps) => {
  return (
    <Dialog open={isOpen} onOpenChange={onClose}>
      <DialogContent className="sm:max-w-md bg-card border-border text-center">
        <div className="py-6 space-y-6">
          {/* Success icon with animation */}
          <div className="relative mx-auto w-20 h-20">
            <div className="absolute inset-0 rounded-full bg-primary/20 animate-ping" />
            <div className="relative w-20 h-20 rounded-full bg-primary/20 flex items-center justify-center">
              <CheckCircle2 className="h-10 w-10 text-primary" />
            </div>
          </div>
          
          <div className="space-y-3">
            <h2 className="font-display font-bold text-2xl text-foreground">
              ¡Bienvenido/a al programa!
            </h2>
            <p className="text-muted-foreground leading-relaxed">
              Hemos recibido tu solicitud correctamente. En breve uno de nuestros 
              asesores se comunicará contigo para coordinar el pago y confirmar 
              tu admisión al programa.
            </p>
          </div>
          
          {/* Next steps */}
          <div className="card-elevated rounded-xl p-4 text-left">
            <p className="text-sm font-medium text-foreground mb-3">Próximos pasos:</p>
            <ul className="space-y-2">
              <li className="flex items-center gap-3 text-sm text-muted-foreground">
                <Mail className="h-4 w-4 text-secondary shrink-0" />
                <span>Revisa tu bandeja de entrada</span>
              </li>
              <li className="flex items-center gap-3 text-sm text-muted-foreground">
                <MessageSquare className="h-4 w-4 text-secondary shrink-0" />
                <span>Un asesor te contactará en 24-48h</span>
              </li>
            </ul>
          </div>
          
          <div className="pt-2">
            <Button 
              onClick={onClose}
              variant="outline"
              className="w-full border-border hover:border-primary hover:text-primary transition-all"
            >
              <Home className="mr-2 h-4 w-4" />
              Volver al inicio
            </Button>
          </div>
          
          <p className="text-xs text-muted-foreground">
            ¿Dudas? Contáctanos en soporte@academiacodytrader.com
          </p>
        </div>
      </DialogContent>
    </Dialog>
  );
};
