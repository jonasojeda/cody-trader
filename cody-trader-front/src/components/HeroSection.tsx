import { CandlestickChart } from "./CandlestickChart";
import { Button } from "./ui/button";
import { TrendingUp, Shield, BarChart3, Target, BookOpen, Users } from "lucide-react";
import {
  Carousel,
  CarouselContent,
  CarouselItem,
  CarouselNext,
  CarouselPrevious,
} from "./ui/carousel";
import Autoplay from "embla-carousel-autoplay";
import { useRef } from "react";

interface HeroSectionProps {
  onOpenCart: () => void;
}

const slides = [
  {
    badge: "Metodología profesional verificable",
    title: (
      <>
        Aprende trading con una metodología{" "}
        <span className="text-gradient-profit">profesional</span>,{" "}
        <span className="text-gradient-trust">medible</span> y basada en datos
      </>
    ),
    description:
      "Formación real en mercados financieros, gestión de riesgo y toma de decisiones. Sin promesas falsas, solo resultados documentados.",
    indicators: [
      { icon: Shield, text: "Gestión de riesgo", color: "text-primary" },
      { icon: BarChart3, text: "Resultados auditables", color: "text-secondary" },
    ],
  },
  {
    badge: "Estrategias comprobadas",
    title: (
      <>
        Domina los mercados con{" "}
        <span className="text-gradient-trust">estrategias</span> probadas y{" "}
        <span className="text-gradient-profit">backtesting</span> real
      </>
    ),
    description:
      "Más de 340 operaciones documentadas con resultados verificables. Aprende de datos reales, no de teorías sin fundamento.",
    indicators: [
      { icon: Target, text: "87% Win Rate", color: "text-primary" },
      { icon: TrendingUp, text: "+18% Mensual", color: "text-secondary" },
    ],
  },
  {
    badge: "Formación integral",
    title: (
      <>
        Desarrolla una{" "}
        <span className="text-gradient-profit">mentalidad</span> de trader{" "}
        <span className="text-gradient-trust">profesional</span>
      </>
    ),
    description:
      "Psicología del trading, control emocional y disciplina operativa. Los pilares que separan a los traders exitosos del resto.",
    indicators: [
      { icon: BookOpen, text: "Programa completo", color: "text-primary" },
      { icon: Users, text: "Mentoría directa", color: "text-secondary" },
    ],
  },
];

export const HeroSection = ({ onOpenCart }: HeroSectionProps) => {
  const plugin = useRef(Autoplay({ delay: 5000, stopOnInteraction: true }));

  return (
    <section className="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
      {/* Background gradient */}
      <div className="absolute inset-0 bg-gradient-to-b from-background via-background to-card" />

      {/* Subtle grid pattern */}
      <div className="absolute inset-0 grid-pattern opacity-20" />

      {/* Glow effects */}
      <div
        className="absolute top-1/4 left-1/4 w-96 h-96 rounded-full opacity-20 blur-3xl"
        style={{ background: "hsl(142 71% 45% / 0.3)" }}
      />
      <div
        className="absolute bottom-1/4 right-1/4 w-80 h-80 rounded-full opacity-15 blur-3xl"
        style={{ background: "hsl(217 91% 60% / 0.3)" }}
      />

      <div className="container relative z-10 px-4 md:px-6">
        <div className="grid lg:grid-cols-2 gap-12 items-center">
          {/* Left content - Carousel */}
          <Carousel
            plugins={[plugin.current]}
            className="w-full"
            opts={{
              loop: true,
            }}
          >
            <CarouselContent>
              {slides.map((slide, index) => (
                <CarouselItem key={index}>
                  <div className="space-y-8 animate-slide-up">
                    <div className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-muted/50 border border-border backdrop-blur-sm">
                      <div className="w-2 h-2 rounded-full bg-primary animate-pulse" />
                      <span className="text-sm text-muted-foreground font-medium">
                        {slide.badge}
                      </span>
                    </div>

                    <h1 className="text-4xl md:text-5xl lg:text-6xl font-display font-bold leading-tight">
                      {slide.title}
                    </h1>

                    <p className="text-lg md:text-xl text-muted-foreground max-w-xl leading-relaxed">
                      {slide.description}
                    </p>

                    <div className="flex flex-col sm:flex-row gap-4">
                      <Button
                        size="lg"
                        onClick={onOpenCart}
                        className="group text-lg px-8 py-6 glow-green hover:scale-105 transition-all duration-300"
                      >
                        <TrendingUp className="mr-2 h-5 w-5 group-hover:translate-x-1 transition-transform" />
                        Acceder al programa
                      </Button>
                      <Button
                        variant="outline"
                        size="lg"
                        className="text-lg px-8 py-6 border-border hover:border-secondary hover:text-secondary transition-all duration-300"
                        onClick={() =>
                          document
                            .getElementById("metodologia")
                            ?.scrollIntoView({ behavior: "smooth" })
                        }
                      >
                        Ver metodología
                      </Button>
                    </div>

                    {/* Trust indicators */}
                    <div className="flex flex-wrap gap-6 pt-4">
                      {slide.indicators.map((indicator, idx) => (
                        <div
                          key={idx}
                          className="flex items-center gap-2 text-muted-foreground"
                        >
                          <indicator.icon className={`h-5 w-5 ${indicator.color}`} />
                          <span className="text-sm">{indicator.text}</span>
                        </div>
                      ))}
                    </div>
                  </div>
                </CarouselItem>
              ))}
            </CarouselContent>
            
            {/* Carousel navigation */}
            <div className="flex items-center gap-4 mt-8">
              <CarouselPrevious className="static translate-y-0 bg-muted/50 border-border hover:bg-muted hover:border-primary" />
              <CarouselNext className="static translate-y-0 bg-muted/50 border-border hover:bg-muted hover:border-primary" />
            </div>
          </Carousel>

          {/* Right content - Chart */}
          <div
            className="relative animate-fade-in"
            style={{ animationDelay: "0.3s" }}
          >
            <div className="card-elevated rounded-2xl p-6 border border-border/50">
              <div className="flex items-center justify-between mb-4">
                <div className="flex items-center gap-3">
                  <div className="w-10 h-10 rounded-lg bg-primary/20 flex items-center justify-center">
                    <TrendingUp className="h-5 w-5 text-primary" />
                  </div>
                  <div>
                    <p className="font-display font-semibold">EUR/USD</p>
                    <p className="text-xs text-muted-foreground">
                      Análisis en tiempo real
                    </p>
                  </div>
                </div>
                <div className="text-right">
                  <p className="font-display font-bold text-primary text-xl">
                    +2.34%
                  </p>
                  <p className="text-xs text-muted-foreground">Última sesión</p>
                </div>
              </div>

              <CandlestickChart />

              <div className="grid grid-cols-3 gap-4 mt-6 pt-4 border-t border-border/50">
                <div className="text-center">
                  <p className="text-2xl font-display font-bold text-foreground">
                    87%
                  </p>
                  <p className="text-xs text-muted-foreground">Win Rate</p>
                </div>
                <div className="text-center">
                  <p className="text-2xl font-display font-bold text-secondary">
                    1:3
                  </p>
                  <p className="text-xs text-muted-foreground">Risk/Reward</p>
                </div>
                <div className="text-center">
                  <p className="text-2xl font-display font-bold text-primary">
                    +18%
                  </p>
                  <p className="text-xs text-muted-foreground">Mensual</p>
                </div>
              </div>
            </div>

            {/* Floating metric card */}
            <div className="absolute -bottom-4 -left-4 card-elevated rounded-xl p-4 border border-border/50 animate-float">
              <div className="flex items-center gap-3">
                <div className="w-8 h-8 rounded-lg bg-secondary/20 flex items-center justify-center">
                  <BarChart3 className="h-4 w-4 text-secondary" />
                </div>
                <div>
                  <p className="text-xs text-muted-foreground">Backtesting</p>
                  <p className="font-display font-bold text-secondary">
                    +340 ops
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};
