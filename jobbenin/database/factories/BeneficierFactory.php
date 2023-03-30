<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Beneficier;
use App\Models\User;
use App\Models\Offre;

class BeneficierFactory extends Factory
{
    protected $model = Beneficier::class;

    public function definition()
    {
        $recruteur = User::where('role', 'recruteur')->inRandomOrder()->first();
        $offre = Offre::inRandomOrder()->first();

        return [
            'id_user' => $recruteur->id,
            'id_offre' => $offre->id,
        ];
    }
}

