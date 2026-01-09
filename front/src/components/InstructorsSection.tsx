import { Linkedin, Award, TrendingUp, BarChart3 } from "lucide-react";
import { useQuery } from "@tanstack/react-query";
import { api } from "@/lib/api";

export const InstructorsSection = () => {
  const { data: instructorsResponse } = useQuery({
    queryKey: ["instructors"],
    queryFn: api.getInstructors,
  });

  const instructors = instructorsResponse?.data || [];

  return (
    <section id="instructores" className="relative py-24 overflow-hidden">
      {/* Background */}
      <div className="absolute inset-0 bg-gradient-to-b from-card via-background to-card" />

      {/* Subtle glow */}
      <div
        className="absolute top-1/2 left-1/4 w-80 h-80 rounded-full opacity-10 blur-3xl"
        style={{ background: "hsl(217 91% 60%)" }}
      />

      <div className="container relative z-10 px-4 md:px-6">
        <div className="text-center max-w-3xl mx-auto mb-16">
          <div className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-secondary/10 border border-secondary/20 mb-6">
            <Award className="h-4 w-4 text-secondary" />
            <span className="text-sm text-secondary font-medium">Equipo</span>
          </div>

          <h2 className="text-3xl md:text-4xl lg:text-5xl font-display font-bold mb-6">
            Aprende de{" "}
            <span className="text-gradient-trust">profesionales</span> reales
          </h2>

          <p className="text-lg text-muted-foreground">
            Nuestros instructores son traders activos con años de experiencia
            documentada en mercados financieros. Sin teoría vacía, solo
            conocimiento aplicado.
          </p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          {instructors.map((instructor) => (
            <div
              key={instructor.id}
              className="group card-elevated rounded-2xl overflow-hidden border border-border/50 hover:border-secondary/50 transition-all duration-300"
            >
              {/* Image */}
              <div className="relative h-64 overflow-hidden">
                <img
                  src={
                    instructor.image ||
                    `https://ui-avatars.com/api/?name=${encodeURIComponent(
                      instructor.name
                    )}&background=random&size=400`
                  }
                  alt={instructor.name}
                  className="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-card via-transparent to-transparent" />

                {/* Experience badge */}
                <div className="absolute top-4 right-4 px-3 py-1.5 rounded-full bg-background/80 backdrop-blur-sm border border-border/50">
                  <span className="text-xs font-medium text-primary">
                    {instructor.experience}
                  </span>
                </div>
              </div>

              {/* Content */}
              <div className="p-6">
                <div className="mb-4">
                  <h3 className="font-display font-bold text-xl text-foreground group-hover:text-secondary transition-colors">
                    {instructor.name}
                  </h3>
                  <p className="text-secondary text-sm font-medium">
                    {instructor.role}
                  </p>
                </div>

                <div className="flex items-center gap-2 mb-4 text-sm text-muted-foreground">
                  <BarChart3 className="h-4 w-4 text-primary" />
                  <span>{instructor.specialty}</span>
                </div>

                <ul className="space-y-2">
                  {instructor.achievements.map((achievement) => (
                    <li
                      key={achievement}
                      className="flex items-center gap-2 text-sm text-muted-foreground"
                    >
                      <TrendingUp className="h-3.5 w-3.5 text-primary shrink-0" />
                      {achievement}
                    </li>
                  ))}
                </ul>

                {/* Social link */}
                {/* <div className="mt-5 pt-5 border-t border-border/50">
                  <a
                    href="#"
                    className="inline-flex items-center gap-2 text-sm text-muted-foreground hover:text-secondary transition-colors"
                  >
                    <Linkedin className="h-4 w-4" />
                    Ver perfil profesional
                  </a>
                </div> */}
              </div>
            </div>
          ))}
        </div>

        {/* Team stats */}
        <div className="mt-16 grid grid-cols-2 md:grid-cols-4 gap-6">
          <div className="text-center p-6 rounded-xl bg-muted/30 border border-border/30">
            <p className="text-3xl font-display font-bold text-foreground mb-1">
              30+
            </p>
            <p className="text-sm text-muted-foreground">Años combinados</p>
          </div>
          <div className="text-center p-6 rounded-xl bg-muted/30 border border-border/30">
            <p className="text-3xl font-display font-bold text-secondary mb-1">
              3
            </p>
            <p className="text-sm text-muted-foreground">Mentores activos</p>
          </div>
          <div className="text-center p-6 rounded-xl bg-muted/30 border border-border/30">
            <p className="text-3xl font-display font-bold text-primary mb-1">
              100%
            </p>
            <p className="text-sm text-muted-foreground">Traders reales</p>
          </div>
          <div className="text-center p-6 rounded-xl bg-muted/30 border border-border/30">
            <p className="text-3xl font-display font-bold text-foreground mb-1">
              24/7
            </p>
            <p className="text-sm text-muted-foreground">Soporte disponible</p>
          </div>
        </div>
      </div>
    </section>
  );
};
