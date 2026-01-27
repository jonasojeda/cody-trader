import { useState } from "react";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import { Badge } from "@/components/ui/badge";
import { Accordion, AccordionContent, AccordionItem, AccordionTrigger } from "@/components/ui/accordion";
import { Dialog, DialogContent, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import { BookOpen, Play, FileDown, ChevronRight, Clock, CheckCircle2 } from "lucide-react";

interface Resource {
  name: string;
  url: string;
  type: string;
}

interface Lesson {
  id: string;
  title: string;
  description: string;
  videoUrl?: string;
  resources: Resource[];
  duration: string;
  completed: boolean;
}

interface Section {
  id: string;
  title: string;
  lessons: Lesson[];
}

interface Course {
  id: string;
  title: string;
  description: string;
  thumbnail: string;
  progress: number;
  sections: Section[];
}

// Hardcoded course data for testing
const COURSES_DATA: Course[] = [
  {
    id: "1",
    title: "Trading Profesional",
    description: "Aprende las bases del trading y conviértete en un trader profesional",
    thumbnail: "https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=400&h=225&fit=crop",
    progress: 35,
    sections: [
      {
        id: "s1",
        title: "Introducción al Trading",
        lessons: [
          {
            id: "l1",
            title: "¿Qué es el trading?",
            description: "En esta clase aprenderás los conceptos básicos del trading, cómo funcionan los mercados financieros y qué necesitas para comenzar tu carrera como trader.",
            videoUrl: "https://www.youtube.com/embed/dQw4w9WgXcQ",
            resources: [
              { name: "Guía de inicio", url: "#", type: "pdf" },
              { name: "Glosario de términos", url: "#", type: "pdf" },
            ],
            duration: "15 min",
            completed: true,
          },
          {
            id: "l2",
            title: "Tipos de mercados",
            description: "Descubre los diferentes tipos de mercados: Forex, acciones, criptomonedas, futuros y más. Aprende las características de cada uno y cuál se adapta mejor a tu perfil.",
            videoUrl: "https://www.youtube.com/embed/dQw4w9WgXcQ",
            resources: [
              { name: "Comparativa de mercados", url: "#", type: "pdf" },
            ],
            duration: "20 min",
            completed: true,
          },
          {
            id: "l3",
            title: "Plataformas de trading",
            description: "Conoce las principales plataformas de trading, cómo configurarlas y cuál elegir según tus necesidades.",
            resources: [],
            duration: "25 min",
            completed: false,
          },
        ],
      },
      {
        id: "s2",
        title: "Análisis Técnico",
        lessons: [
          {
            id: "l4",
            title: "Velas japonesas",
            description: "Aprende a leer e interpretar los patrones de velas japonesas, una de las herramientas más importantes del análisis técnico.",
            videoUrl: "https://www.youtube.com/embed/dQw4w9WgXcQ",
            resources: [
              { name: "Cheat sheet de velas", url: "#", type: "pdf" },
              { name: "Ejercicios prácticos", url: "#", type: "xlsx" },
            ],
            duration: "30 min",
            completed: false,
          },
          {
            id: "l5",
            title: "Soportes y resistencias",
            description: "Domina el concepto de soportes y resistencias, cómo identificarlos y usarlos para tomar mejores decisiones de trading.",
            videoUrl: "https://www.youtube.com/embed/dQw4w9WgXcQ",
            resources: [],
            duration: "35 min",
            completed: false,
          },
        ],
      },
      {
        id: "s3",
        title: "Gestión de Riesgo",
        lessons: [
          {
            id: "l6",
            title: "Money management",
            description: "La gestión del capital es clave para sobrevivir en el trading. Aprende las reglas de oro para proteger tu cuenta.",
            videoUrl: "https://www.youtube.com/embed/dQw4w9WgXcQ",
            resources: [
              { name: "Calculadora de riesgo", url: "#", type: "xlsx" },
            ],
            duration: "40 min",
            completed: false,
          },
        ],
      },
    ],
  },
];

export const CoursesSection = () => {
  const [selectedLesson, setSelectedLesson] = useState<Lesson | null>(null);
  const [selectedCourse, setSelectedCourse] = useState<Course | null>(null);

  const openLesson = (lesson: Lesson, course: Course) => {
    setSelectedLesson(lesson);
    setSelectedCourse(course);
  };

  const closeLesson = () => {
    setSelectedLesson(null);
    setSelectedCourse(null);
  };

  return (
    <div className="space-y-6">
      <div>
        <h1 className="text-3xl font-bold">Mis Cursos</h1>
        <p className="text-muted-foreground mt-1">Continúa tu aprendizaje</p>
      </div>

      <div className="grid gap-6">
        {COURSES_DATA.map((course) => (
          <Card key={course.id} className="border-border/50 overflow-hidden">
            <div className="md:flex">
              {/* Course thumbnail */}
              <div className="md:w-64 h-40 md:h-auto flex-shrink-0">
                <img
                  src={course.thumbnail}
                  alt={course.title}
                  className="w-full h-full object-cover"
                />
              </div>

              {/* Course content */}
              <div className="flex-1">
                <CardHeader>
                  <div className="flex items-start justify-between gap-4">
                    <div>
                      <CardTitle className="text-xl">{course.title}</CardTitle>
                      <CardDescription className="mt-1">{course.description}</CardDescription>
                    </div>
                    <Badge variant="secondary" className="shrink-0">
                      {course.progress}% completado
                    </Badge>
                  </div>
                  {/* Progress bar */}
                  <div className="mt-3 h-2 bg-muted rounded-full overflow-hidden">
                    <div
                      className="h-full bg-primary transition-all"
                      style={{ width: `${course.progress}%` }}
                    />
                  </div>
                </CardHeader>

                <CardContent>
                  <Accordion type="single" collapsible className="w-full">
                    {course.sections.map((section, sectionIndex) => (
                      <AccordionItem key={section.id} value={section.id}>
                        <AccordionTrigger className="hover:no-underline">
                          <div className="flex items-center gap-3">
                            <span className="flex items-center justify-center w-6 h-6 rounded-full bg-primary/20 text-primary text-xs font-bold">
                              {sectionIndex + 1}
                            </span>
                            <span>{section.title}</span>
                            <Badge variant="outline" className="ml-2">
                              {section.lessons.length} clases
                            </Badge>
                          </div>
                        </AccordionTrigger>
                        <AccordionContent>
                          <div className="space-y-2 pl-9">
                            {section.lessons.map((lesson) => (
                              <button
                                key={lesson.id}
                                onClick={() => openLesson(lesson, course)}
                                className="w-full flex items-center gap-3 p-3 rounded-lg hover:bg-muted transition-colors text-left group"
                              >
                                <div className={`p-2 rounded-lg ${lesson.completed ? 'bg-green-500/20' : 'bg-muted'}`}>
                                  {lesson.completed ? (
                                    <CheckCircle2 className="h-4 w-4 text-green-500" />
                                  ) : lesson.videoUrl ? (
                                    <Play className="h-4 w-4 text-muted-foreground" />
                                  ) : (
                                    <BookOpen className="h-4 w-4 text-muted-foreground" />
                                  )}
                                </div>
                                <div className="flex-1 min-w-0">
                                  <p className={`font-medium truncate ${lesson.completed ? 'text-muted-foreground' : ''}`}>
                                    {lesson.title}
                                  </p>
                                  <div className="flex items-center gap-2 text-xs text-muted-foreground">
                                    <Clock className="h-3 w-3" />
                                    <span>{lesson.duration}</span>
                                    {lesson.resources.length > 0 && (
                                      <>
                                        <span>•</span>
                                        <FileDown className="h-3 w-3" />
                                        <span>{lesson.resources.length} recursos</span>
                                      </>
                                    )}
                                  </div>
                                </div>
                                <ChevronRight className="h-4 w-4 text-muted-foreground group-hover:text-foreground transition-colors" />
                              </button>
                            ))}
                          </div>
                        </AccordionContent>
                      </AccordionItem>
                    ))}
                  </Accordion>
                </CardContent>
              </div>
            </div>
          </Card>
        ))}
      </div>

      {/* Lesson Modal */}
      <Dialog open={!!selectedLesson} onOpenChange={closeLesson}>
        <DialogContent className="max-w-3xl max-h-[90vh] overflow-y-auto">
          {selectedLesson && (
            <>
              <DialogHeader>
                <DialogTitle className="text-xl">{selectedLesson.title}</DialogTitle>
              </DialogHeader>

              <div className="space-y-6 mt-4">
                {/* Video */}
                {selectedLesson.videoUrl && (
                  <div className="aspect-video rounded-lg overflow-hidden bg-muted">
                    <iframe
                      src={selectedLesson.videoUrl}
                      title={selectedLesson.title}
                      className="w-full h-full"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                      allowFullScreen
                    />
                  </div>
                )}

                {/* Description */}
                <div>
                  <h3 className="font-semibold mb-2">Descripción</h3>
                  <p className="text-muted-foreground">{selectedLesson.description}</p>
                </div>

                {/* Resources */}
                {selectedLesson.resources.length > 0 && (
                  <div>
                    <h3 className="font-semibold mb-3">Recursos para descargar</h3>
                    <div className="grid gap-2">
                      {selectedLesson.resources.map((resource, index) => (
                        <a
                          key={index}
                          href={resource.url}
                          className="flex items-center gap-3 p-3 rounded-lg border border-border hover:bg-muted transition-colors"
                        >
                          <FileDown className="h-5 w-5 text-primary" />
                          <span className="flex-1">{resource.name}</span>
                          <Badge variant="outline" className="uppercase text-xs">
                            {resource.type}
                          </Badge>
                        </a>
                      ))}
                    </div>
                  </div>
                )}

                {/* Actions */}
                <div className="flex gap-3">
                  <Button className="glow-green flex-1">
                    {selectedLesson.completed ? "Volver a ver" : "Marcar como completada"}
                  </Button>
                  <Button variant="outline" onClick={closeLesson}>
                    Cerrar
                  </Button>
                </div>
              </div>
            </>
          )}
        </DialogContent>
      </Dialog>
    </div>
  );
};