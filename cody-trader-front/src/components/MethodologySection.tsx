import { useQuery } from "@tanstack/react-query";
import * as icons from "lucide-react";
import { api } from "@/lib/api";

export const MethodologySection = () => {
  const {
    data: methodologyData,
    isLoading,
    isError,
  } = useQuery({
    queryKey: ["methodologies"],
    queryFn: api.getMethodologies,
  });

  const methodologies = methodologyData?.data || [];

  const toPascalCase = (str: string) =>
    str.replace(/(^\w|-\w)/g, (c) => c.replace("-", "").toUpperCase());

  return (
    <section id="metodologia" className="relative py-24 overflow-hidden">
      {/* Background */}
      <div className="absolute inset-0 bg-gradient-to-b from-card to-background" />

      <div className="container relative z-10 px-4 md:px-6">
        <div className="text-center max-w-3xl mx-auto mb-16">
          <div className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-secondary/10 border border-secondary/20 mb-6">
            <icons.Calculator className="h-4 w-4 text-secondary" />
            <span className="text-sm text-secondary font-medium">
              Metodología
            </span>
          </div>

          <h2 className="text-3xl md:text-4xl lg:text-5xl font-display font-bold mb-6">
            Un enfoque <span className="text-gradient-trust">sistemático</span>{" "}
            y medible
          </h2>

          <p className="text-lg text-muted-foreground">
            Nuestra metodología se basa en principios probados de gestión de
            riesgo, análisis técnico y psicología del trading. Todo documentado,
            todo verificable.
          </p>
        </div>

        {isLoading && (
          <div className="text-center">Cargando metodologías...</div>
        )}
        {isError && (
          <div className="text-center text-red-500">
            Error al cargar las metodologías.
          </div>
        )}

        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
          {methodologies.map((method, index) => {
            const IconComponent =
              (
                icons as unknown as Record<
                  string,
                  React.ComponentType<icons.LucideProps>
                >
              )[toPascalCase(method.icon)] || icons.Target;
            return (
              <div
                key={method.id}
                className="group card-elevated rounded-2xl p-6 border border-border/50 hover:border-secondary/50 transition-all duration-300 hover:-translate-y-1"
                style={{ animationDelay: `${index * 100}ms` }}
              >
                <div className="w-12 h-12 rounded-xl bg-secondary/10 flex items-center justify-center mb-4 group-hover:bg-secondary/20 transition-colors">
                  <IconComponent className="h-6 w-6 text-secondary" />
                </div>

                <h3 className="font-display font-semibold text-xl mb-3 group-hover:text-secondary transition-colors">
                  {method.title}
                </h3>

                <p className="text-muted-foreground leading-relaxed">
                  {method.description}
                </p>
              </div>
            );
          })}
        </div>

        {/* Stats bar */}
        <div className="mt-16 card-elevated rounded-2xl p-8 border border-border/50">
          <div className="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div className="text-center">
              <p className="text-4xl md:text-5xl font-display font-bold text-primary mb-2">
                340+
              </p>
              <p className="text-muted-foreground">Operaciones backtested</p>
            </div>
            <div className="text-center">
              <p className="text-4xl md:text-5xl font-display font-bold text-secondary mb-2">
                87%
              </p>
              <p className="text-muted-foreground">Tasa de acierto</p>
            </div>
            <div className="text-center">
              <p className="text-4xl md:text-5xl font-display font-bold text-foreground mb-2">
                1:3
              </p>
              <p className="text-muted-foreground">Ratio riesgo/beneficio</p>
            </div>
            <div className="text-center">
              <p className="text-4xl md:text-5xl font-display font-bold text-primary mb-2">
                2%
              </p>
              <p className="text-muted-foreground">Riesgo máximo por op.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};
