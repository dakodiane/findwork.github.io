<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Freelancer>
 */
class FreelancerFactory extends Factory
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
             //
             'nomF' => fake()->name(),
             'prenomF' => fake()->name(),
             'emailF' => Str::random(10).'@gmail.com',
             'mdpF' => Hash::make('password'),
             'telephoneF' => random_int(10000000,99999999),
             'secteurF' => Str::random(10),
             'adresseF' => Str::random(10),
             'created_at' => now(),
             'updated_at' => now(),
        ];
    }
}
