import { useState, useEffect } from "react";
import { Dialog, DialogContent, DialogHeader, DialogTitle } from "./ui/dialog";
import { Button } from "./ui/button";
import * as LucideIcons from "lucide-react";
import { api, CourseContent } from "@/lib/api";
import { toast } from "@/hooks/use-toast";

interface CartModalProps {
  isOpen: boolean;
  onClose: () => void;
  onProceed: () => void;
  onPayment: () => void;
}

export const CartModal = ({
  isOpen,
  onClose,
  onProceed,
  onPayment,
}: CartModalProps) => {
  const [loading, setLoading] = useState(true);
  const [courseContent, setCourseContent] = useState<CourseContent | null>(null);

  useEffect(() => {
    if (isOpen) {
      loadCourseContent();
    }
  }, [isOpen]);

  const loadCourseContent = async () => {
    try {
      setLoading(true);
      const response = await api.getCourseContents();
      if (response.data && response.data.length > 0) {
        setCourseContent(response.data[0]);
      }
    } catch (error) {
      console.error("Error loading course content:", error);
      toast({
        title: "Error",
        description: "No se pudo cargar la información del curso.",
        variant: "destructive"
      });
    } finally {
      setLoading(false);
    }
  };

  const getIcon = (iconName: string) => {
    // Normalization: kebab-case to PascalCase (e.g. trending-up -> TrendingUp)
    // Also handles existing PascalCase (e.g. Clock -> Clock)
    const pascalName = iconName
      .split('-')
      .map(part => part.charAt(0).toUpperCase() + part.slice(1))
      .join('');

    const IconComponent = (LucideIcons as any)[pascalName] || (LucideIcons as any)[iconName] || LucideIcons.CheckCircle2;
    return <IconComponent className="h-4 w-4" />;
  };

  return (
    <Dialog open={isOpen} onOpenChange={onClose}>
      <DialogContent className="sm:max-w-lg bg-card border-border">
        <DialogHeader>
          <DialogTitle className="font-display text-2xl flex items-center gap-3">
            <div className="w-10 h-10 rounded-xl bg-primary/20 flex items-center justify-center">
              <LucideIcons.ShoppingCart className="h-5 w-5 text-primary" />
            </div>
            Tu selección
          </DialogTitle>
        </DialogHeader>

        <div className="space-y-6 py-4">
          {loading ? (
            <div className="flex flex-col items-center justify-center py-10 space-y-4">
              <LucideIcons.Loader2 className="h-8 w-8 animate-spin text-primary" />
              <p className="text-sm text-muted-foreground">Cargando información...</p>
            </div>
          ) : courseContent ? (
            <>
              {/* Course card */}
              <div className="rounded-xl bg-muted/50 border border-border p-5">
                <div className="flex items-start justify-between mb-4">
                  <div>
                    <h3 className="font-display font-bold text-xl text-foreground">
                      {courseContent.title}
                    </h3>
                    <p className="text-sm text-muted-foreground mt-1">
                      {courseContent.academy}
                    </p>
                  </div>
                  <div className="text-right">
                    <p className="text-2xl font-display font-bold text-primary">
                      ${courseContent.price}
                    </p>
                    <p className="text-xs text-muted-foreground">{courseContent.currency}</p>
                  </div>
                </div>

                <div className="space-y-2 mb-4">
                  {courseContent.description.map((desc, index) => (
                    <div key={index} className="flex items-center gap-2 text-sm text-muted-foreground">
                      {getIcon(desc.icon)}
                      <span>{desc.text}</span>
                    </div>
                  ))}
                </div>

                <div className="border-t border-border pt-4">
                  <p className="text-sm font-medium text-foreground mb-2">
                    Incluye:
                  </p>
                  <ul className="space-y-1.5">
                    {courseContent.content.map((item, index) => (
                      <li
                        key={index}
                        className="flex items-center gap-2 text-sm text-muted-foreground"
                      >
                        <LucideIcons.CheckCircle2 className="h-4 w-4 text-primary shrink-0" />
                        {item}
                      </li>
                    ))}
                  </ul>
                </div>
              </div>

              {/* Summary */}
              <div className="flex items-center justify-between py-4 border-t border-border">
                <span className="font-semibold text-foreground">Total a pagar</span>
                <span className="text-2xl font-display font-bold text-primary">
                  ${courseContent.price} {courseContent.currency}
                </span>
              </div>

              <p className="text-xs text-muted-foreground text-center">
                Selecciona una opción para continuar con tu inscripción.
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
                  size="lg"
                  variant="outline"
                  onClick={onPayment}
                  className="w-full hover:scale-[1.02] transition-all duration-300 border-primary/50 hover:bg-primary/10"
                >
                  <LucideIcons.CreditCard className="mr-2 h-4 w-4" />
                  Realizar pago
                </Button>
              </div>
            </>
          ) : (
            <div className="text-center py-10">
              <p className="text-muted-foreground">No se encontró información del curso.</p>
            </div>
          )}
        </div>
      </DialogContent>
    </Dialog>
  );
};
