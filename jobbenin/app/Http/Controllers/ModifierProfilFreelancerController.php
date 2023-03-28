<?php

namespace App\Http\Controllers;

use App\Models\Freelancer;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ModifierProfilFreelancerController;

class ModifierProfilFreelancerController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        
        // Vérifier si une image a été téléchargée
        if ($request->hasFile('image')) {
            // Récupérer le fichier de la requête
            $file = $request->file('image');
            
            // Générer un nom unique pour le fichier
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            
            // Déplacer le fichier dans le dossier public
            $file->storeAs('public', $filename);
            
            // Stocker le nom du fichier dans la base de données
            $user->image = $filename;
        }
        
        $user->save();
        
        return redirect()->back()->with('success', 'Profil mis à jour avec succès.');
    }
   
}
