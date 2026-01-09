import { Button } from "./ui/button";
import { TrendingUp, Shield, BarChart3, Target, BookOpen, Users, LucideIcon } from "lucide-react";
import {
  Carousel,
  CarouselContent,
  CarouselItem,
  CarouselNext,
  CarouselPrevious,
  type CarouselApi,
} from "./ui/carousel";
import Autoplay from "embla-carousel-autoplay";
import { useRef, useState, useEffect } from "react";

interface HeroSectionProps {
  onOpenCart: () => void;
}

interface SlideData {
  title: string;
  highlight: string;
  tag: string;
  description: string;
  primary_btn_text: string;
  primary_btn_link: string;
  secondary_btn_text: string;
  secondary_btn_link: string;
  image: string;
  floating_card_title: string;
  floating_card_description: string;
  floating_card_icon: LucideIcon;
  indicators: { icon: LucideIcon; text: string; color: string }[];
}

const slides: SlideData[] = [
  {
    title: "Aprende trading con una metodología",
    highlight: "profesional, medible y basada en datos",
    tag: "Metodología profesional verificable",
    description: "Formación real en mercados financieros, gestión de riesgo y toma de decisiones. Sin promesas falsas, solo resultados documentados.",
    primary_btn_text: "Acceder al programa",
    primary_btn_link: "#cart",
    secondary_btn_text: "Ver metodología",
    secondary_btn_link: "#metodologia",
    image: "https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?q=80&w=2070&auto=format&fit=crop",
    floating_card_title: "+340 ops",
    floating_card_description: "Backtesting",
    floating_card_icon: BarChart3,
    indicators: [
      { icon: Shield, text: "Gestión de riesgo", color: "text-primary" },
      { icon: BarChart3, text: "Resultados auditables", color: "text-secondary" },
    ],
  },
  {
    title: "Domina los mercados con estrategias",
    highlight: "probadas y backtesting real",
    tag: "Estrategias comprobadas",
    description: "Más de 340 operaciones documentadas con resultados verificables. Aprende de datos reales, no de teorías sin fundamento.",
    primary_btn_text: "Comenzar ahora",
    primary_btn_link: "#cart",
    secondary_btn_text: "Ver resultados",
    secondary_btn_link: "#autoridad",
    image: "https://images.unsplash.com/photo-1642790106117-e829e14a795f?q=80&w=2070&auto=format&fit=crop",
    floating_card_title: "87%",
    floating_card_description: "Win Rate",
    floating_card_icon: Target,
    indicators: [
      { icon: Target, text: "87% Win Rate", color: "text-primary" },
      { icon: TrendingUp, text: "+18% Mensual", color: "text-secondary" },
    ],
  },
  {
    title: "Desarrolla una mentalidad de trader",
    highlight: "profesional y disciplinado",
    tag: "Formación integral",
    description: "Psicología del trading, control emocional y disciplina operativa. Los pilares que separan a los traders exitosos del resto.",
    primary_btn_text: "Unirme ahora",
    primary_btn_link: "#cart",
    secondary_btn_text: "Conocer instructores",
    secondary_btn_link: "#instructores",
    image: "https://images.unsplash.com/photo-1559526324-4b87b5e36e44?q=80&w=2071&auto=format&fit=crop",
    floating_card_title: "+1.2K",
    floating_card_description: "Estudiantes",
    floating_card_icon: Users,
    indicators: [
      { icon: BookOpen, text: "Programa completo", color: "text-primary" },
      { icon: Users, text: "Mentoría directa", color: "text-secondary" },
    ],
  },
];

export const HeroSection = ({ onOpenCart }: HeroSectionProps) => {
  const plugin = useRef(Autoplay({ delay: 5000, stopOnInteraction: true }));
  const [api, setApi] = useState<CarouselApi>();
  const [currentSlide, setCurrentSlide] = useState(0);

  useEffect(() => {
    if (!api) return;

    setCurrentSlide(api.selectedScrollSnap());

    api.on("select", () => {
      setCurrentSlide(api.selectedScrollSnap());
    });
  }, [api]);

  const handlePrimaryClick = (link: string) => {
    if (link === "#cart") {
      onOpenCart();
    } else {
      document.querySelector(link)?.scrollIntoView({ behavior: "smooth" });
    }
  };

  const handleSecondaryClick = (link: string) => {
    document.querySelector(link)?.scrollIntoView({ behavior: "smooth" });
  };

  return (
    <section className="relative min-h-screen flex items-center justify-center overflow-hidden">
      <Carousel
        plugins={[plugin.current]}
        className="w-full h-full"
        setApi={setApi}
        opts={{
          loop: true,
        }}
      >
        <CarouselContent className="h-full">
          {slides.map((slide, index) => (
            <CarouselItem key={index} className="h-full">
              {/* Full-width background image */}
              <div className="relative min-h-screen flex items-center">
                {/* Background image */}
                <div className="absolute inset-0">
                  <img
                    src={slide.image}
                    alt={slide.title}
                    className="w-full h-full object-cover"
                  />
                  {/* Dark overlay for readability */}
                  <div className="absolute inset-0 bg-gradient-to-r from-background via-background/95 to-background/60" />
                  <div className="absolute inset-0 bg-gradient-to-t from-background via-transparent to-background/50" />
                </div>

                {/* Glow effects */}
                <div
                  className="absolute top-1/4 left-1/4 w-96 h-96 rounded-full opacity-20 blur-3xl pointer-events-none"
                  style={{ background: "hsl(142 71% 45% / 0.3)" }}
                />
                <div
                  className="absolute bottom-1/4 right-1/4 w-80 h-80 rounded-full opacity-15 blur-3xl pointer-events-none"
                  style={{ background: "hsl(217 91% 60% / 0.3)" }}
                />

                {/* Content */}
                <div className="container relative z-10 px-4 md:px-6 pt-20">
                  <div className="max-w-2xl space-y-8 animate-fade-in">
                    {/* Tag */}
                    <div className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-muted/50 border border-border backdrop-blur-sm">
                      <div className="w-2 h-2 rounded-full bg-primary animate-pulse" />
                      <span className="text-sm text-muted-foreground font-medium">
                        {slide.tag}
                      </span>
                    </div>

                    {/* Title and Highlight */}
                    <h1 className="text-4xl md:text-5xl lg:text-6xl font-display font-bold leading-tight">
                      {slide.title}{" "}
                      <span className="text-gradient-profit">{slide.highlight}</span>
                    </h1>

                    {/* Description */}
                    <p className="text-lg md:text-xl text-muted-foreground max-w-xl leading-relaxed">
                      {slide.description}
                    </p>

                    {/* Buttons */}
                    <div className="flex flex-col sm:flex-row gap-4">
                      <Button
                        size="lg"
                        onClick={() => handlePrimaryClick(slide.primary_btn_link)}
                        className="group text-lg px-8 py-6 glow-green hover:scale-105 transition-all duration-300"
                      >
                        <TrendingUp className="mr-2 h-5 w-5 group-hover:translate-x-1 transition-transform" />
                        {slide.primary_btn_text}
                      </Button>
                      <Button
                        variant="outline"
                        size="lg"
                        className="text-lg px-8 py-6 border-border hover:border-secondary hover:text-secondary transition-all duration-300"
                        onClick={() => handleSecondaryClick(slide.secondary_btn_link)}
                      >
                        {slide.secondary_btn_text}
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

                  {/* Floating card */}
                  <div className="absolute bottom-20 right-8 md:right-20 card-elevated rounded-xl p-4 border border-border/50 animate-float backdrop-blur-sm bg-card/80">
                    <div className="flex items-center gap-3">
                      <div className="w-10 h-10 rounded-lg bg-primary/20 flex items-center justify-center">
                        <slide.floating_card_icon className="h-5 w-5 text-primary" />
                      </div>
                      <div>
                        <p className="text-xs text-muted-foreground">{slide.floating_card_description}</p>
                        <p className="font-display font-bold text-primary text-xl">
                          {slide.floating_card_title}
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </CarouselItem>
          ))}
        </CarouselContent>

        {/* Carousel navigation */}
        <div className="absolute bottom-8 left-1/2 -translate-x-1/2 flex items-center gap-4 z-20">
          <CarouselPrevious className="static translate-y-0 bg-muted/50 border-border hover:bg-muted hover:border-primary backdrop-blur-sm" />
          
          {/* Dots indicator */}
          <div className="flex gap-2">
            {slides.map((_, index) => (
              <button
                key={index}
                onClick={() => api?.scrollTo(index)}
                className={`w-2 h-2 rounded-full transition-all duration-300 ${
                  currentSlide === index
                    ? "w-8 bg-primary"
                    : "bg-muted-foreground/50 hover:bg-muted-foreground"
                }`}
              />
            ))}
          </div>
          
          <CarouselNext className="static translate-y-0 bg-muted/50 border-border hover:bg-muted hover:border-primary backdrop-blur-sm" />
        </div>
      </Carousel>
    </section>
  );
};
