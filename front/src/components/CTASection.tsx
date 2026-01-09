import { Button } from "./ui/button";
import { TrendingUp, Shield, Clock } from "lucide-react";

interface CTASectionProps {
  onOpenCart: () => void;
}

export const CTASection = ({ onOpenCart }: CTASectionProps) => {
  return (
    <section className="relative py-24 overflow-hidden">
      {/* Background effects */}
      <div className="absolute inset-0 bg-gradient-to-b from-background to-card" />
      <div 
        className="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] rounded-full opacity-20 blur-3xl"
        style={{ background: "hsl(142 71% 45% / 0.2)" }}
      />
      
      <div className="container relative z-10 px-4 md:px-6">
        <div className="max-w-3xl mx-auto text-center">
          <div className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 border border-primary/20 mb-6">
            <Clock className="h-4 w-4 text-primary" />
            <span className="text-sm text-primary font-medium">Cupos limitados</span>
          </div>
          
          <h2 className="text-3xl md:text-4xl lg:text-5xl font-display font-bold mb-6">
            Comienza tu formación{" "}
            <span className="text-gradient-profit">profesional</span>
          </h2>
          
          <p className="text-lg text-muted-foreground mb-8 max-w-xl mx-auto">
            Únete a una comunidad de traders comprometidos con el aprendizaje 
            serio y la operativa disciplinada. Sin atajos, sin promesas vacías.
          </p>
          
          <div className="flex flex-col sm:flex-row items-center justify-center gap-4 mb-8">
            <Button 
              size="lg" 
              onClick={onOpenCart}
              className="text-lg px-10 py-6 glow-green hover:scale-105 transition-all duration-300"
            >
              <TrendingUp className="mr-2 h-5 w-5" />
              Reservar mi lugar
            </Button>
          </div>
          
          <div className="flex flex-wrap items-center justify-center gap-6 text-sm text-muted-foreground">
            <div className="flex items-center gap-2">
              <Shield className="h-4 w-4 text-primary" />
              <span>Pago seguro</span>
            </div>
            <div className="flex items-center gap-2">
              <Clock className="h-4 w-4 text-secondary" />
              <span>Acceso inmediato</span>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};
