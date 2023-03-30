<?php

namespace Database\Factories;
use App\Models\Postuler;
use App\Models\User;
use App\Models\Offre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Postuler>
 */

 class PostulerFactory extends Factory
 {
     protected $model = Postuler::class;
 
     public function definition()
     {
         $postulant = User::where('role', 'postulant')->inRandomOrder()->first();
         $offre = Offre::inRandomOrder()->first();
 
         return [
             'id_user' => $postulant->id,
             'id_offre' => $offre->id,
         ];
     }
 }
