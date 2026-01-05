import { Dialog, DialogContent, DialogHeader, DialogTitle } from "./ui/dialog";
import { Button } from "./ui/button";
import { ShoppingCart, CheckCircle2, TrendingUp, Clock, Users } from "lucide-react";

interface CartModalProps {
  isOpen: boolean;
  onClose: () => void;
  onProceed: () => void;
}

export const CartModal = ({ isOpen, onClose, onProceed }: CartModalProps) => {
  return (
    <Dialog open={isOpen} onOpenChange={onClose}>
      <DialogContent className="sm:max-w-lg bg-card border-border">
        <DialogHeader>
          <DialogTitle className="font-display text-2xl flex items-center gap-3">
            <div className="w-10 h-10 rounded-xl bg-primary/20 flex items-center justify-center">
              <ShoppingCart className="h-5 w-5 text-primary" />
            </div>
            Tu selección
          </DialogTitle>
        </DialogHeader>
        
        <div className="space-y-6 py-4">
          {/* Course card */}
          <div className="rounded-xl bg-muted/50 border border-border p-5">
            <div className="flex items-start justify-between mb-4">
              <div>
                <h3 className="font-display font-bold text-xl text-foreground">
                  Programa Completo de Trading
                </h3>
                <p className="text-sm text-muted-foreground mt-1">
                  Academia Cody Trader
                </p>
              </div>
              <div className="text-right">
                <p className="text-2xl font-display font-bold text-primary">$497</p>
                <p className="text-xs text-muted-foreground">USD</p>
              </div>
            </div>
            
            <div className="space-y-2 mb-4">
              <div className="flex items-center gap-2 text-sm text-muted-foreground">
                <Clock className="h-4 w-4" />
                <span>Acceso por 12 meses</span>
              </div>
              <div className="flex items-center gap-2 text-sm text-muted-foreground">
                <Users className="h-4 w-4" />
                <span>Comunidad privada incluida</span>
              </div>
              <div className="flex items-center gap-2 text-sm text-muted-foreground">
                <TrendingUp className="h-4 w-4" />
                <span>Sesiones en vivo semanales</span>
              </div>
            </div>
            
            <div className="border-t border-border pt-4">
              <p className="text-sm font-medium text-foreground mb-2">Incluye:</p>
              <ul className="space-y-1.5">
                {[
                  "Módulos completos de formación",
                  "Acceso a la metodología documentada",
                  "Plantillas y herramientas de análisis",
                  "Soporte directo con el mentor"
                ].map((item) => (
                  <li key={item} className="flex items-center gap-2 text-sm text-muted-foreground">
                    <CheckCircle2 className="h-4 w-4 text-primary shrink-0" />
                    {item}
                  </li>
                ))}
              </ul>
            </div>
          </div>
          
          {/* Summary */}
          <div className="flex items-center justify-between py-4 border-t border-border">
            <span className="font-semibold text-foreground">Total a reservar</span>
            <span className="text-2xl font-display font-bold text-primary">$497 USD</span>
          </div>
          
          <p className="text-xs text-muted-foreground text-center">
            Al continuar, un asesor se pondrá en contacto para coordinar el pago y confirmar tu admisión.
          </p>
          
          <div className="flex flex-col gap-3">
            <Button 
              size="lg" 
              onClick={onProceed}
              className="w-full glow-green hover:scale-[1.02] transition-all duration-300"
            >
              Reservar mi lugar
            </Button>
            <Button 
              variant="ghost" 
              onClick={onClose}
              className="w-full text-muted-foreground hover:text-foreground"
            >
              Seguir explorando
            </Button>
          </div>
        </div>
      </DialogContent>
    </Dialog>
  );
};
