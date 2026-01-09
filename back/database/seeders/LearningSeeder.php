<?php

namespace Database\Seeders;

use App\Models\Learning;
use Illuminate\Database\Seeder;

class LearningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = [
            [
                'icon' => 'BookOpen',
                'title' => 'Lectura de mercado',
                'topics' => [
                    'Estructura de mercado y fases',
                    'Zonas de oferta y demanda',
                    'Análisis multi-temporal',
                    'Identificación de tendencias'
                ]
            ],
            [
                'icon' => 'TrendingUp',
                'title' => 'Entradas y salidas profesionales',
                'topics' => [
                    'Patrones de alta probabilidad',
                    'Confirmaciones de entrada',
                    'Gestión de stops dinámicos',
                    'Toma de beneficios escalonada'
                ]
            ],
            [
                'icon' => 'Brain',
                'title' => 'Psicología del trader',
                'topics' => [
                    'Control emocional en operativa',
                    'Sesgos cognitivos a evitar',
                    'Mentalidad de probabilidades',
                    'Resiliencia ante pérdidas'
                ]
            ],
            [
                'icon' => 'Wallet',
                'title' => 'Control del capital',
                'topics' => [
                    'Cálculo de posición óptima',
                    'Curvas de equity',
                    'Drawdown máximo',
                    'Diversificación inteligente'
                ]
            ],
            [
                'icon' => 'HeartPulse',
                'title' => 'Gestión emocional',
                'topics' => [
                    'Rutinas pre-operativas',
                    'Journaling de operaciones',
                    'Revisión y mejora continua',
                    'Balance vida-trading'
                ]
            ]
        ];

        foreach ($modules as $module) {
            Learning::create($module);
        }
    }
}
