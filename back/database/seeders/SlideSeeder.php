<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slide;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $slides = [
            [
                'title' => "Aprende trading con una metodología",
                'highlight' => "profesional, medible y basada en datos",
                'tag' => "Metodología profesional verificable",
                'description' => "Formación real en mercados financieros, gestión de riesgo y toma de decisiones. Sin promesas falsas, solo resultados documentados.",
                'primary_btn_text' => "Acceder al programa",
                'primary_btn_link' => "#cart",
                'secondary_btn_text' => "Ver metodología",
                'secondary_btn_link' => "#metodologia",
                'image' => "https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?q=80&w=2070&auto=format&fit=crop",
                'floating_card_title' => "+340 ops",
                'floating_card_description' => "Backtesting",
                'floating_card_icon' => "BarChart3",
                'indicators' => [
                    ['icon' => "Shield", 'text' => "Gestión de riesgo", 'color' => "text-primary"],
                    ['icon' => "BarChart3", 'text' => "Resultados auditables", 'color' => "text-secondary"],
                ],
                'expiration' => false,
                'expiration_date' => null,
                'activation_date' => null,
            ],
            [
                'title' => "Domina los mercados con estrategias",
                'highlight' => "probadas y backtesting real",
                'tag' => "Estrategias comprobadas",
                'description' => "Más de 340 operaciones documentadas con resultados verificables. Aprende de datos reales, no de teorías sin fundamento.",
                'primary_btn_text' => "Comenzar ahora",
                'primary_btn_link' => "#cart",
                'secondary_btn_text' => "Ver resultados",
                'secondary_btn_link' => "#autoridad",
                'image' => "https://images.unsplash.com/photo-1642790106117-e829e14a795f?q=80&w=2070&auto=format&fit=crop",
                'floating_card_title' => "87%",
                'floating_card_description' => "Win Rate",
                'floating_card_icon' => "Target",
                'indicators' => [
                    ['icon' => "Target", 'text' => "87% Win Rate", 'color' => "text-primary"],
                    ['icon' => "TrendingUp", 'text' => "+18% Mensual", 'color' => "text-secondary"],
                ],
                'expiration' => false,
                'expiration_date' => null,
                'activation_date' => null,
            ],
            [
                'title' => "Desarrolla una mentalidad de trader",
                'highlight' => "profesional y disciplinado",
                'tag' => "Formación integral",
                'description' => "Psicología del trading, control emocional y disciplina operativa. Los pilares que separan a los traders exitosos del resto.",
                'primary_btn_text' => "Unirme ahora",
                'primary_btn_link' => "#cart",
                'secondary_btn_text' => "Conocer instructores",
                'secondary_btn_link' => "#instructores",
                'image' => "https://images.unsplash.com/photo-1559526324-4b87b5e36e44?q=80&w=2071&auto=format&fit=crop",
                'floating_card_title' => "+1.2K",
                'floating_card_description' => "Estudiantes",
                'floating_card_icon' => "Users",
                'indicators' => [
                    ['icon' => "BookOpen", 'text' => "Programa completo", 'color' => "text-primary"],
                    ['icon' => "Users", 'text' => "Mentoría directa", 'color' => "text-secondary"],
                ],
                'expiration' => false,
                'expiration_date' => null,
                'activation_date' => null,
            ],
        ];

        foreach ($slides as $slide) {
            Slide::create($slide);
        }
    }
}
