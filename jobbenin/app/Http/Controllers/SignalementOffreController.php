<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Offre;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class SignalementOffreController extends Controller 
{
    public function index(Request $request, $id_offre)
{
    $offre = Offre::find($id_offre);

    return view('signalement', ['offre' => $offre]);
}
}


