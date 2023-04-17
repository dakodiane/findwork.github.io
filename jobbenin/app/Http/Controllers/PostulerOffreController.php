<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostulerOffreController;


class PostulerOffreController extends Controller
{
   
    public function postulerOffre(Request $request)
    {
        // Vérifier si l'utilisateur est connecté
        if (!Auth::check()) {
            return redirect()->route('connexion')->with('error', 'Vous devez vous connecter pour postuler à une offre');
        }
    
        // Récupérer l'utilisateur connecté
        $user = Auth::user();
    
        // Récupérer les données du postulant à partir de la requête
        $cv = $request->input('cv');
        $lettre_motivation = $request->input('lettre_motivation');
    
        // Mettre à jour les attributs cv et lettre_motivation de l'utilisateur
        $user->cv = $cv;
        $user->lettre_motivation = $lettre_motivation;
        $user->save();
    
        // Récupérer le nom de l'utilisateur
        $name = $user->name;
    
        // Retourner la vue avec les données mises à jour
        return redirect()->route('')->with(['success' => 'Informations mises à jour avec succès', 'user' => $user]);

    }
    
    
    
    
}

