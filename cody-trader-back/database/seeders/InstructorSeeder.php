<?php

namespace Database\Seeders;

use App\Models\Instructor;
use Illuminate\Database\Seeder;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instructors = [
            [
                'name' => 'Carlos Mendoza',
                'role' => 'Director de Formación',
                'experience' => '12 años en mercados',
                'specialty' => 'Price Action & Estructura',
                'achievements' => [
                    'Ex-trader institucional',
                    'Certificación CMT',
                    '+2,000 alumnos formados'
                ],
                'image' => ''
            ],
            [
                'name' => 'Andrea Villareal',
                'role' => 'Mentora Senior',
                'experience' => '8 años en mercados',
                'specialty' => 'Gestión de Riesgo & Forex',
                'achievements' => [
                    'Especialista en divisas',
                    'Autora de metodología',
                    'Gestora de carteras'
                ],
                'image' => ''
            ],
            [
                'name' => 'Roberto Cárdenas',
                'role' => 'Analista Técnico',
                'experience' => '10 años en mercados',
                'specialty' => 'Análisis Cuantitativo',
                'achievements' => [
                    'PhD en Matemáticas Financieras',
                    'Desarrollador de sistemas',
                    'Backtesting avanzado'
                ],
                'image' => ''
            ]
        ];

        foreach ($instructors as $instructor) {
            Instructor::create($instructor);
        }
    }
}
