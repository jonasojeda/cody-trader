<?php

namespace Database\Seeders;

use App\Models\Methodology;
use Illuminate\Database\Seeder;

class MethodologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $methodologies = [
            [
                'icon' => 'Target',
                'title' => 'Reglas claras',
                'description' => 'Sistema de trading con entradas y salidas definidas. Sin ambigüedades ni interpretaciones subjetivas.',
            ],
            [
                'icon' => 'ShieldCheck',
                'title' => 'Gestión de riesgo',
                'description' => 'Protección del capital como prioridad. Límites de pérdida, posicionamiento correcto y preservación.',
            ],
            [
                'icon' => 'LineChart',
                'title' => 'Backtesting riguroso',
                'description' => 'Estrategias validadas con datos históricos. Más de 340 operaciones documentadas y analizadas.',
            ],
            [
                'icon' => 'Brain',
                'title' => 'Disciplina operativa',
                'description' => 'Rutinas y procesos que eliminan la improvisación. Operativa sistemática y replicable.',
            ],
            [
                'icon' => 'Calculator',
                'title' => 'Enfoque estadístico',
                'description' => 'Decisiones basadas en probabilidades y expectativa matemática, no en intuiciones.',
            ],
        ];

        foreach ($methodologies as $methodology) {
            Methodology::create($methodology);
        }
    }
}
