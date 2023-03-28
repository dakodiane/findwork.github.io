<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Offre;
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
            'id_user' => User::all()->random()->id,
            'id_offre' => Offre::all()->random()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
