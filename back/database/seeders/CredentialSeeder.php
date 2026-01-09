<?php

namespace Database\Seeders;

use App\Models\Credential;
use Illuminate\Database\Seeder;

class CredentialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $credentials = [
            [
                'icon' => 'Clock',
                'value' => '8+',
                'label' => 'Años de experiencia',
                'description' => 'Operando en mercados financieros globales'
            ],
            [
                'icon' => 'FileCheck',
                'value' => '100%',
                'label' => 'Documentado',
                'description' => 'Metodología y resultados verificables'
            ],
            [
                'icon' => 'Users',
                'value' => '500+',
                'label' => 'Alumnos formados',
                'description' => 'En países de habla hispana'
            ],
            [
                'icon' => 'TrendingUp',
                'value' => 'Consistente',
                'label' => 'Track record',
                'description' => 'Resultados auditables año tras año'
            ]
        ];

        foreach ($credentials as $credential) {
            Credential::create($credential);
        }
    }
}
