<?php

namespace Database\Factories;

use App\Models\Freelancer;
use App\Models\Recruteur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contacter>
 */
class ContacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'idrecruteur' => Recruteur::all()->random()->id,
            'idfreelancer' => Freelancer::all()->random()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
