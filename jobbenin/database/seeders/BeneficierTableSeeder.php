<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//
use App\Models\Beneficier;

class BeneficierTableSeeder extends Seeder
{
    public function run()
    {
        Beneficier::factory()->count(5)->create();
    }
}

