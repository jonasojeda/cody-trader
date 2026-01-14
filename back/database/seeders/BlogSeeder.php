<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'id' => 1,
                'order' => 1,
                'title' => "Introducción al Trading de Criptomonedas",
                'description' => "Aprende los conceptos fundamentales del trading de criptomonedas. En este video exploramos las bases del mercado crypto, cómo funcionan los exchanges, y las estrategias básicas que todo trader debe conocer antes de comenzar su camino en este emocionante mundo financiero.",
                'thumbnail' => "https://img.youtube.com/vi/dQw4w9WgXcQ/maxresdefault.jpg",
                'youtubeId' => "dQw4w9WgXcQ",
            ],
            [
                'id' => 2,
                'order' => 2,
                'title' => "Análisis Técnico: Patrones de Velas",
                'description' => "Domina el arte del análisis técnico con patrones de velas japonesas. Descubre cómo interpretar las formaciones más importantes como doji, martillo, envolvente y muchos más para tomar decisiones de trading más informadas.",
                'thumbnail' => "https://img.youtube.com/vi/dQw4w9WgXcQ/maxresdefault.jpg",
                'youtubeId' => "dQw4w9WgXcQ",
            ],
            [
                'id' => 3,
                'order' => 3,
                'title' => "Gestión de Riesgo en Trading",
                'description' => "La gestión de riesgo es la clave del éxito en el trading. Aprende a proteger tu capital, establecer stop-loss efectivos, y calcular el tamaño de posición adecuado para cada operación.",
                'thumbnail' => "https://img.youtube.com/vi/dQw4w9WgXcQ/maxresdefault.jpg",
                'youtubeId' => "dQw4w9WgXcQ",
            ],
            [
                'id' => 4,
                'order' => 4,
                'title' => "Estrategias de Scalping",
                'description' => "El scalping es una técnica de trading que busca obtener pequeñas ganancias en múltiples operaciones. Conoce las mejores estrategias y herramientas para convertirte en un scalper exitoso.",
                'thumbnail' => "https://img.youtube.com/vi/dQw4w9WgXcQ/maxresdefault.jpg",
                'youtubeId' => "dQw4w9WgXcQ",
            ],
            [
                'id' => 5,
                'order' => 5,
                'title' => "DeFi: El Futuro de las Finanzas",
                'description' => "Las finanzas descentralizadas están revolucionando el mundo financiero. Explora los protocolos DeFi más importantes, cómo funcionan los pools de liquidez, y las oportunidades de yield farming.",
                'thumbnail' => "https://img.youtube.com/vi/dQw4w9WgXcQ/maxresdefault.jpg",
                'youtubeId' => "dQw4w9WgXcQ",
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
