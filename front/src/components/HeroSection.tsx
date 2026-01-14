import { Button } from "./ui/button";
import * as LucideIcons from "lucide-react";
import { api, Slide } from "../lib/api";
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

export const HeroSection = ({ onOpenCart }: HeroSectionProps) => {
  const plugin = useRef(Autoplay({ delay: 5000, stopOnInteraction: true }));
  const [carouselApi, setCarouselApi] = useState<CarouselApi>();
  const [currentSlide, setCurrentSlide] = useState(0);
  const [slides, setSlides] = useState<Slide[]>([]);

  useEffect(() => {
    const fetchSlides = async () => {
      try {
        const response = await api.getSlides();
        if (response && response.data) {
          setSlides(response.data);
        }
      } catch (error) {
        console.error("Error fetching slides:", error);
      }
    };
    fetchSlides();
  }, []);

  const getIcon = (name: string) => {
    const Icon = (LucideIcons as any)[name];
    return Icon || LucideIcons.HelpCircle;
  };

  useEffect(() => {
    if (!carouselApi) return;

    setCurrentSlide(carouselApi.selectedScrollSnap());

    carouselApi.on("select", () => {
      setCurrentSlide(carouselApi.selectedScrollSnap());
    });
  }, [carouselApi]);

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
        setApi={setCarouselApi}
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
                        <LucideIcons.TrendingUp className="mr-2 h-5 w-5 group-hover:translate-x-1 transition-transform" />
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
                          {(() => {
                            const Icon = getIcon(indicator.icon);
                            return <Icon className={`h-5 w-5 ${indicator.color}`} />;
                          })()}
                          <span className="text-sm">{indicator.text}</span>
                        </div>
                      ))}
                    </div>
                  </div>

                  {/* Floating card */}
                  <div className="absolute bottom-20 right-8 md:right-20 card-elevated rounded-xl p-4 border border-border/50 animate-float backdrop-blur-sm bg-card/80">
                    <div className="flex items-center gap-3">
                      <div className="w-10 h-10 rounded-lg bg-primary/20 flex items-center justify-center">
                        {(() => {
                          const FloatingIcon = getIcon(slide.floating_card_icon);
                          return <FloatingIcon className="h-5 w-5 text-primary" />;
                        })()}
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
                onClick={() => carouselApi?.scrollTo(index)}
                className={`w-2 h-2 rounded-full transition-all duration-300 ${currentSlide === index
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
