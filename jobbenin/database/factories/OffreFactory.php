<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offre>
 */
class OffreFactory extends Factory
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
            'datdebut' => fake()->date(),
            'datfin' => fake()->date(),
            'detail' => fake()->sentence(),
            'poste' => Str::random(10),
            'secteurO' => Str::random(10),
            'salaireO' => random_int(0,9999999999),
            'diplome' => Str::random(10),
            'competenceO' => Str::random(10),
            'typeO'=> Str::random(10),
            'id_user' => User::all()->random()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
