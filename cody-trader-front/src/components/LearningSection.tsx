import { useQuery } from "@tanstack/react-query";
import * as icons from "lucide-react";
import { api } from "@/lib/api";

export const LearningSection = () => {
  const {
    data: learningsData,
    isLoading,
    isError,
  } = useQuery({
    queryKey: ["learnings"],
    queryFn: api.getLearnings,
  });

  const modules = learningsData?.data || [];

  // Helper para convertir kebab-case o lowercase a PascalCase (ej: 'rocket-launch' -> 'RocketLaunch')
  const toPascalCase = (str: string) =>
    str.replace(/(^\w|-\w)/g, (c) => c.replace("-", "").toUpperCase());

  return (
    <section id="aprenderas" className="relative py-24">
      <div className="container px-4 md:px-6">
        <div className="text-center max-w-3xl mx-auto mb-16">
          <div className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 border border-primary/20 mb-6">
            <icons.BookOpen className="h-4 w-4 text-primary" />
            <span className="text-sm text-primary font-medium">Programa</span>
          </div>

          <h2 className="text-3xl md:text-4xl lg:text-5xl font-display font-bold mb-6">
            Qué vas a <span className="text-gradient-profit">aprender</span>
          </h2>

          <p className="text-lg text-muted-foreground">
            Un programa integral que cubre todos los aspectos del trading
            profesional. Desde análisis técnico hasta psicología operativa.
          </p>
        </div>

        {isLoading && <div className="text-center">Cargando módulos...</div>}
        {isError && (
          <div className="text-center text-red-500">
            Error al cargar los módulos.
          </div>
        )}

        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
          {modules.map((module) => {
            const IconComponent =
              (
                icons as unknown as Record<
                  string,
                  React.ComponentType<icons.LucideProps>
                >
              )[toPascalCase(module.icon)] || icons.BookOpen;
            return (
              <div
                key={module.id}
                className="group card-elevated rounded-2xl p-6 border border-border/50 hover:border-primary/50 transition-all duration-300"
              >
                <div className="flex items-start gap-4 mb-6">
                  <div className="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center shrink-0 group-hover:bg-primary/20 transition-colors">
                    <IconComponent className="h-6 w-6 text-primary" />
                  </div>
                  <div>
                    <h3 className="font-display font-semibold text-xl group-hover:text-primary transition-colors">
                      {module.title}
                    </h3>
                  </div>
                </div>

                <ul className="space-y-3">
                  {module.topics.map((topic) => (
                    <li key={topic} className="flex items-start gap-3">
                      <icons.CheckCircle2 className="h-5 w-5 text-primary shrink-0 mt-0.5" />
                      <span className="text-muted-foreground">{topic}</span>
                    </li>
                  ))}
                </ul>
              </div>
            );
          })}
        </div>
      </div>
    </section>
  );
};
