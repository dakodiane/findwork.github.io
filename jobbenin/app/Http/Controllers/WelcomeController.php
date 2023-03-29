<?php

namespace App\Http\Controllers;

use index;
use App\Models\User;
use App\Models\Offre;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
   
    public function index()
{
  

    // Récupération des offres
    $offres = Offre::with('user')->get();
    // Récupération des freelancers
        $freelancers = User::where('role', 'freelancer')->get();

        // Affichage de la vue avec les données
        return view('welcome', [
            'freelancers' => $freelancers,
            'offres'=>$offres,
        ]);
}
   
   
}


