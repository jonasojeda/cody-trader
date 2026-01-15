<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedioPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $medios = [
            [
                'name' => 'Binance',
                'descripcion' => 'Pago mediante Binance.',
                'reference_code' => 'CC123456',
                'qr_pay' => null,
            ],
        ];

        if (!empty($medios)) {
            foreach ($medios as $medio) {
                \App\Models\MedioPago::create($medio);
            }
        }
    }
}
