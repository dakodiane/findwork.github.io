<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Offre;
use App\Models\Postuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostulerOffreController extends Controller
{
    public function postulerOffre(Request $request, string $id_offre) {
        // Vérifier si l'utilisateur est connecté
        if (!Auth::check()) {
            return redirect()->route('connexion')->with('error', 'Vous devez vous connecter pour postuler à une offre');
        }
    
        // RidO
        $user = Auth::user();
        $offre = Offre::find($id_offre);
    
        // Vérification si l'utilisateur a déjà postulé à l'offre
        $postuler = Postuler::where('id_offre', $offre->id)
                             ->where('id_user', $user->id)
                             ->first();
        if ($postuler) {
            return redirect()->route('vosoffres')->with('error', 'Vous avez déjà postulé à cette offre');
        }
    
        // RDU
        $cv = $request->input('cv');
        $lettre_motivation = $request->input('lettre_motivation');
    
        // Insertion d'une nouvelle ligne ou mise à jour d'une ligne existante
        $postuler = Postuler::create([
            'id_offre' => $offre->id,
            'id_user' => $user->id,
            'cv' => $cv,
            'lettre_motivation' => $lettre_motivation,
        ]);
    
  
        return redirect()->route('vosoffres')->with(['user' => $user,'offre' =>$offre,'postuler' =>$postuler]);
    }
    
    
    
    public function show(string $id_offre)
    {
        $user = Auth::user();
     // récupérer l'offre avec l'id correspondant
    $offre = Offre::find($id_offre);
      // Récupérer le nom de l'utilisateur
      $name = $user->name;
    // afficher la vue de la page de postulation
    return view('postuleroffre', ['offre' => $offre,'user' => $user]);
    }
    
    
    
}

