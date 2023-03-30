<?php

namespace Database\Seeders;

use App\Models\Postuler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostulerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Postuler::factory()->count(5)->create();

    }
}
