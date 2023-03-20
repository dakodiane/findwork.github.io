<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recruteur>
 */
class RecruteurFactory extends Factory
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
     
            'nomR' => fake()->name(),
            'secteurR' => Str::random(10),
            'adresseR' => Str::random(10),
            'villeR' => Str::random(10),
            'description' => fake()->sentence(),
            'email' => Str::random(10).'@gmail.com',
            'mdpR' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),

   
        ];
     }
} 
