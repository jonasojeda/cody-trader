<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            'Argentina',
            'Brazil',
            'Canada',
            'Denmark',
            'Egypt',
            'France',
            'Germany',
            'Hungary',
            'India',
            'Japan',
            'Kenya',
            'Luxembourg',
            'Mexico',
            'Netherlands',
            'Oman',
            'Portugal',
            'Qatar',
            'Russia',
            'Spain',
            'Turkey',
            'United Kingdom',
            'United States',
            'Venezuela',
            'Yemen',
            'Zimbabwe'
        ];

        if(!empty($countries)) {
            foreach ($countries as $countryName) {
                \App\Models\Country::create(['name' => $countryName]);
            }
        }
    }
}
