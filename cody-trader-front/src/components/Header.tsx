import { useState, useEffect } from "react";
import { Button } from "./ui/button";
import { TrendingUp, Menu, X } from "lucide-react";

interface HeaderProps {
  onOpenCart: () => void;
}

export const Header = ({ onOpenCart }: HeaderProps) => {
  const [isScrolled, setIsScrolled] = useState(false);
  const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 20);
    };
    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  const scrollTo = (id: string) => {
    document.getElementById(id)?.scrollIntoView({ behavior: 'smooth' });
    setIsMobileMenuOpen(false);
  };

  return (
    <header 
      className={`fixed top-0 left-0 right-0 z-50 transition-all duration-300 ${
        isScrolled 
          ? "bg-background/90 backdrop-blur-lg border-b border-border/50 py-3" 
          : "bg-transparent py-5"
      }`}
    >
      <div className="container px-4 md:px-6">
        <div className="flex items-center justify-between">
          {/* Logo */}
          <a href="/" className="flex items-center gap-2 group">
            <div className="w-10 h-10 rounded-lg bg-primary/20 flex items-center justify-center group-hover:bg-primary/30 transition-colors">
              <TrendingUp className="h-5 w-5 text-primary" />
            </div>
            <span className="font-display font-bold text-lg hidden sm:block">
              Cody Trader
            </span>
          </a>
          
          {/* Desktop navigation */}
          <nav className="hidden md:flex items-center gap-8">
            <button 
              onClick={() => scrollTo('metodologia')}
              className="text-muted-foreground hover:text-foreground transition-colors text-sm font-medium"
            >
              Metodología
            </button>
            <button 
              onClick={() => scrollTo('aprenderas')}
              className="text-muted-foreground hover:text-foreground transition-colors text-sm font-medium"
            >
              Programa
            </button>
            <button 
              onClick={() => scrollTo('autoridad')}
              className="text-muted-foreground hover:text-foreground transition-colors text-sm font-medium"
            >
              Credenciales
            </button>
          </nav>
          
          {/* CTA Button */}
          <div className="flex items-center gap-4">
            <Button 
              onClick={onOpenCart}
              className="hidden sm:flex glow-green"
            >
              Reservar cupo
            </Button>
            
            {/* Mobile menu button */}
            <button 
              className="md:hidden p-2 text-muted-foreground hover:text-foreground transition-colors"
              onClick={() => setIsMobileMenuOpen(!isMobileMenuOpen)}
              aria-label="Toggle menu"
            >
              {isMobileMenuOpen ? <X className="h-6 w-6" /> : <Menu className="h-6 w-6" />}
            </button>
          </div>
        </div>
        
        {/* Mobile menu */}
        {isMobileMenuOpen && (
          <nav className="md:hidden mt-4 pb-4 border-t border-border pt-4 animate-fade-in">
            <div className="flex flex-col gap-4">
              <button 
                onClick={() => scrollTo('metodologia')}
                className="text-muted-foreground hover:text-foreground transition-colors text-sm font-medium text-left"
              >
                Metodología
              </button>
              <button 
                onClick={() => scrollTo('aprenderas')}
                className="text-muted-foreground hover:text-foreground transition-colors text-sm font-medium text-left"
              >
                Programa
              </button>
              <button 
                onClick={() => scrollTo('autoridad')}
                className="text-muted-foreground hover:text-foreground transition-colors text-sm font-medium text-left"
              >
                Credenciales
              </button>
              <Button 
                onClick={() => {
                  onOpenCart();
                  setIsMobileMenuOpen(false);
                }}
                className="w-full glow-green mt-2"
              >
                Reservar cupo
              </Button>
            </div>
          </nav>
        )}
      </div>
    </header>
  );
};
