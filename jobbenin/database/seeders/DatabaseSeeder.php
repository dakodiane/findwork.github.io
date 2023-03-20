<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Beneficier;
use App\Models\Contacter;
use App\Models\Freelancer;
use App\Models\Offre;
use App\Models\Postulant;
use App\Models\Recruter;
use App\Models\Recruteur;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Recruter::factory(10)->create();
    }
}
