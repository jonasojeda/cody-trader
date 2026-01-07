<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use COM;
use Illuminate\Database\Seeder;
use Mockery\Generator\Method;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            LearningSeeder::class,
            MethodologySeeder::class,
            FooterSeeder::class,
            InstructorSeeder::class,
            CredentialSeeder::class,
        ]);
    }
}
