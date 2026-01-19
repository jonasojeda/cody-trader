<?php

namespace Database\Seeders;

use App\Models\Stats;
use Illuminate\Database\Seeder;

class StatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stats = [
            [
                'value' => '30+',
                'label' => 'Años combinados',
                'color' => '#ffffff',
            ],
            [
                'value' => '3',
                'label' => 'Mentores activos',
                'color' => '#00ff00',
            ],
            [
                'value' => '100%',
                'label' => 'Traders reales',
                'color' => '#00ff00',
            ],
            [
                'value' => '24/7',
                'label' => 'Soporte disponible',
                'color' => '#ffffff',
            ],
        ];

        foreach ($stats as $stat) {
            if (!Stats::where('value', $stat['value'])->where('label', $stat['label'])->exists()) {
                Stats::create($stat);
            }
        }
    }
}
