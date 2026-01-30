<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\SectionCourse;
use App\Models\LessonCourse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear el curso
        $course = Course::create([
            'title' => 'Trading Profesional',
            'description' => 'Aprende las bases del trading y conviértete en un trader profesional',
            'thumbnail' => 'https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=400&h=225&fit=crop',
        ]);

        // Sección 1: Introducción al Trading
        $section1 = SectionCourse::create([
            'course_id' => $course->id,
            'title' => 'Introducción al Trading',
        ]);

        // Lecciones de la Sección 1
        LessonCourse::create([
            'section_course_id' => $section1->id,
            'title' => '¿Qué es el trading?',
            'description' => 'En esta clase aprenderás los conceptos básicos del trading, cómo funcionan los mercados financieros y qué necesitas para comenzar tu carrera como trader.',
            'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
            'resources' => [
                ['name' => 'Guía de inicio', 'url' => '#', 'type' => 'pdf'],
                ['name' => 'Glosario de términos', 'url' => '#', 'type' => 'pdf'],
            ],
        ]);

        LessonCourse::create([
            'section_course_id' => $section1->id,
            'title' => 'Tipos de mercados',
            'description' => 'Descubre los diferentes tipos de mercados: Forex, acciones, criptomonedas, futuros y más. Aprende las características de cada uno y cuál se adapta mejor a tu perfil.',
            'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
            'resources' => [
                ['name' => 'Comparativa de mercados', 'url' => '#', 'type' => 'pdf'],
            ],
        ]);

        LessonCourse::create([
            'section_course_id' => $section1->id,
            'title' => 'Plataformas de trading',
            'description' => 'Conoce las principales plataformas de trading, cómo configurarlas y cuál elegir según tus necesidades.',
            'video_url' => null,
            'resources' => [],
        ]);

        // Sección 2: Análisis Técnico
        $section2 = SectionCourse::create([
            'course_id' => $course->id,
            'title' => 'Análisis Técnico',
        ]);

        // Lecciones de la Sección 2
        LessonCourse::create([
            'section_course_id' => $section2->id,
            'title' => 'Velas japonesas',
            'description' => 'Aprende a leer e interpretar los patrones de velas japonesas, una de las herramientas más importantes del análisis técnico.',
            'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
            'resources' => [
                ['name' => 'Cheat sheet de velas', 'url' => '#', 'type' => 'pdf'],
                ['name' => 'Ejercicios prácticos', 'url' => '#', 'type' => 'xlsx'],
            ],
        ]);

        LessonCourse::create([
            'section_course_id' => $section2->id,
            'title' => 'Soportes y resistencias',
            'description' => 'Domina el concepto de soportes y resistencias, cómo identificarlos y usarlos para tomar mejores decisiones de trading.',
            'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
            'resources' => [],
        ]);

        // Sección 3: Gestión de Riesgo
        $section3 = SectionCourse::create([
            'course_id' => $course->id,
            'title' => 'Gestión de Riesgo',
        ]);

        // Lecciones de la Sección 3
        LessonCourse::create([
            'section_course_id' => $section3->id,
            'title' => 'Money management',
            'description' => 'La gestión del capital es clave para sobrevivir en el trading. Aprende las reglas de oro para proteger tu cuenta.',
            'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
            'resources' => [
                ['name' => 'Calculadora de riesgo', 'url' => '#', 'type' => 'xlsx'],
            ],
        ]);
    }
}
