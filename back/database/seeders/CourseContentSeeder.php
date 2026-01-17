<?php

namespace Database\Seeders;

use App\Models\CourseContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $content = [
            [
            'title' => 'Programa Completo de Trading',
            'academy' => 'Academia Cody Trader',
            'price' => 497,
            'currency' => 'USD',

            'description' => [
                [
                    'text' => 'Acceso por 12 meses',
                    'icon' => 'Clock',
                ],
                [
                    'text' => 'Comunidad privada incluida',
                    'icon' => 'Users',
                ],
                [
                    'text' => 'Sesiones en vivo semanales',
                    'icon' => 'TrendingUp',
                ],
            ],

            'content' => [
                'Módulos completos de formación',
                'Acceso a la metodología documentada',
                'Plantillas y herramientas de análisis',
                'Soporte directo con el mentor',
            ],
        ]
        ];

        if(CourseContent::count() == 0){
            foreach ($content as $item) {
                CourseContent::create($item);
            }
        }
    }
}
