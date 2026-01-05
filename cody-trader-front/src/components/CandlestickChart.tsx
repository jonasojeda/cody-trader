import { useEffect, useState } from "react";

interface Candle {
  open: number;
  close: number;
  high: number;
  low: number;
}

const generateCandles = (count: number): Candle[] => {
  const candles: Candle[] = [];
  let basePrice = 100;
  
  for (let i = 0; i < count; i++) {
    const change = (Math.random() - 0.45) * 8;
    const open = basePrice;
    const close = basePrice + change;
    const high = Math.max(open, close) + Math.random() * 3;
    const low = Math.min(open, close) - Math.random() * 3;
    
    candles.push({ open, close, high, low });
    basePrice = close;
  }
  
  return candles;
};

export const CandlestickChart = () => {
  const [candles, setCandles] = useState<Candle[]>([]);
  const [animated, setAnimated] = useState(false);

  useEffect(() => {
    setCandles(generateCandles(24));
    const timer = setTimeout(() => setAnimated(true), 100);
    return () => clearTimeout(timer);
  }, []);

  const minPrice = Math.min(...candles.flatMap(c => [c.low])) - 5;
  const maxPrice = Math.max(...candles.flatMap(c => [c.high])) + 5;
  const priceRange = maxPrice - minPrice;

  const getY = (price: number) => ((maxPrice - price) / priceRange) * 200;

  return (
    <div className="relative w-full h-[220px] overflow-hidden">
      {/* Grid lines */}
      <div className="absolute inset-0 grid-pattern opacity-30" />
      
      <svg 
        viewBox="0 0 480 220" 
        className="w-full h-full"
        preserveAspectRatio="xMidYMid meet"
      >
        {/* Horizontal grid lines */}
        {[0, 1, 2, 3, 4].map(i => (
          <line
            key={i}
            x1="0"
            y1={i * 50 + 10}
            x2="480"
            y2={i * 50 + 10}
            stroke="hsl(222 30% 18%)"
            strokeWidth="1"
            strokeDasharray="4 4"
          />
        ))}
        
        {candles.map((candle, index) => {
          const isGreen = candle.close > candle.open;
          const x = index * 20 + 10;
          const bodyTop = getY(Math.max(candle.open, candle.close));
          const bodyBottom = getY(Math.min(candle.open, candle.close));
          const bodyHeight = Math.max(bodyBottom - bodyTop, 2);
          
          return (
            <g 
              key={index}
              className={animated ? "animate-candle" : "opacity-0"}
              style={{ 
                animationDelay: `${index * 50}ms`,
                transformOrigin: `${x + 7}px ${bodyBottom}px`
              }}
            >
              {/* Wick */}
              <line
                x1={x + 7}
                y1={getY(candle.high) + 10}
                x2={x + 7}
                y2={getY(candle.low) + 10}
                stroke={isGreen ? "hsl(142 71% 45%)" : "hsl(0 62% 50%)"}
                strokeWidth="1.5"
              />
              {/* Body */}
              <rect
                x={x}
                y={bodyTop + 10}
                width="14"
                height={bodyHeight}
                fill={isGreen ? "hsl(142 71% 45%)" : "hsl(0 62% 50%)"}
                rx="1"
                className="transition-all duration-300"
              />
            </g>
          );
        })}
        
        {/* Trend line */}
        <path
          d={`M 10 ${getY(candles[0]?.close || 100) + 10} ${candles.map((c, i) => `L ${i * 20 + 17} ${getY(c.close) + 10}`).join(' ')}`}
          fill="none"
          stroke="hsl(217 91% 60%)"
          strokeWidth="2"
          strokeLinecap="round"
          className={animated ? "animate-fade-in" : "opacity-0"}
          style={{ animationDelay: "1.2s" }}
        />
      </svg>
      
      {/* Glow effect */}
      <div 
        className="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-20 opacity-40"
        style={{ background: "var(--gradient-glow-green)" }}
      />
    </div>
  );
};
