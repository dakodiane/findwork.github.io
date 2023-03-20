<?php

namespace Database\Factories;

use App\Models\Offre;
use App\Models\Postulant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Beneficier>
 */
class BeneficierFactory extends Factory
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
            'idpostulant' => Postulant::all()->random()->id,
            'ref' => Offre::all()->random()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
