import { Award, FileCheck, Users, AlertTriangle, Clock, TrendingUp } from "lucide-react";

const credentials = [
  {
    icon: Clock,
    value: "8+",
    label: "Años de experiencia",
    description: "Operando en mercados financieros globales"
  },
  {
    icon: FileCheck,
    value: "100%",
    label: "Documentado",
    description: "Metodología y resultados verificables"
  },
  {
    icon: Users,
    value: "500+",
    label: "Alumnos formados",
    description: "En países de habla hispana"
  },
  {
    icon: TrendingUp,
    value: "Consistente",
    label: "Track record",
    description: "Resultados auditables año tras año"
  }
];

export const AuthoritySection = () => {
  return (
    <section id="autoridad" className="relative py-24 overflow-hidden">
      {/* Background */}
      <div className="absolute inset-0 bg-gradient-to-b from-background via-card to-background" />
      
      <div className="container relative z-10 px-4 md:px-6">
        <div className="text-center max-w-3xl mx-auto mb-16">
          <div className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-muted border border-border mb-6">
            <Award className="h-4 w-4 text-foreground" />
            <span className="text-sm text-foreground font-medium">Credenciales</span>
          </div>
          
          <h2 className="text-3xl md:text-4xl lg:text-5xl font-display font-bold mb-6">
            Formación respaldada por{" "}
            <span className="text-gradient-profit">resultados</span>
          </h2>
          
          <p className="text-lg text-muted-foreground">
            No prometemos riquezas instantáneas. Ofrecemos educación seria, metodología 
            probada y acompañamiento profesional. Los resultados hablan por sí solos.
          </p>
        </div>
        
        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
          {credentials.map((credential) => (
            <div
              key={credential.label}
              className="text-center card-elevated rounded-2xl p-6 border border-border/50 hover:border-primary/30 transition-all duration-300"
            >
              <div className="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mx-auto mb-4">
                <credential.icon className="h-7 w-7 text-primary" />
              </div>
              
              <p className="text-3xl md:text-4xl font-display font-bold text-foreground mb-1">
                {credential.value}
              </p>
              <p className="font-semibold text-foreground mb-2">{credential.label}</p>
              <p className="text-sm text-muted-foreground">{credential.description}</p>
            </div>
          ))}
        </div>
        
        {/* Risk disclaimer */}
        <div className="card-elevated rounded-2xl p-6 md:p-8 border border-destructive/30 bg-destructive/5">
          <div className="flex flex-col md:flex-row items-start gap-4">
            <div className="w-12 h-12 rounded-xl bg-destructive/20 flex items-center justify-center shrink-0">
              <AlertTriangle className="h-6 w-6 text-destructive" />
            </div>
            
            <div>
              <h3 className="font-display font-semibold text-lg mb-2 text-foreground">
                Aviso legal de riesgo
              </h3>
              <p className="text-muted-foreground text-sm leading-relaxed">
                El trading en mercados financieros conlleva riesgos significativos y puede no ser 
                adecuado para todos los inversores. Los resultados pasados no garantizan rendimientos 
                futuros. Nunca inviertas dinero que no puedas permitirte perder. Este programa es 
                educativo y no constituye asesoría financiera. Consulta con un profesional antes de 
                tomar decisiones de inversión.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};
