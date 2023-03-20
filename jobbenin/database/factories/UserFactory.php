<?php

namespace Database\Factories;

use App\Models\Beneficier;
use App\Models\Contacter;
use App\Models\Freelancer;
use App\Models\Offre;
use App\Models\Postulant;
use App\Models\Recruter;
use App\Models\Recruteur;
use Database\Seeders\RecruteurSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

             Recruter::factory()->count(10)->make() ,
             ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
