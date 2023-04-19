<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Offre;
use App\Models\Postuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostulerOffreController;


class PostulerOffreController extends Controller
{
   
    public function postulerOffre(Request $request, string $id_offre) {
        // Vérifier si l'utilisateur est connecté
        if (!Auth::check()) {
            return redirect()->route('connexion')->with('error', 'Vous devez vous connecter pour postuler à une offre');
        }
    
       // Récupération de l'utilisateur connecté
       $user = Auth::user();

       $cv = $request->input('cv');
       $lettre_motivation = $request->input('lettre_motivation');
       
       $offre = Offre::find($id_offre);
  
       $postuler = new Postuler();
       $postuler->cv = $cv;
       $postuler->lettre_motivation = $lettre_motivation;
       $postuler->id_user = $user->id;
       $postuler->id_offre = $offre->id ?? "";
    
       $postuler->save();
    
        // Récupérer le nom de l'utilisateur
        $name = $user->name;
    
        // Retourner la vue avec les données mises à jour
        return redirect()->route('vosoffres')->with(['success' => 'Informations mises à jour avec succès', 'user' => $user]);

    }
    
    public function show(string $id_offre)
    {
     // récupérer l'offre avec l'id correspondant
    $offre = Offre::find($id_offre);
    
    // afficher la vue de la page de postulation avec les détails de l'offre
    return view('postuleroffre', ['offre' => $offre]);
    }
    
    
    
}

