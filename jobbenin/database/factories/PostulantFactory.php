<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Type\Integer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Postulant>
 */
class PostulantFactory extends Factory
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
            'nomP' => fake()->name(),
            'prenomP' => fake()->name(),
            'emailP' => Str::random(10).'@gmail.com',
            'mdpP' => Hash::make('password'),
            'telephoneP' => random_int(10000000,99999999),
            'adresseP' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
