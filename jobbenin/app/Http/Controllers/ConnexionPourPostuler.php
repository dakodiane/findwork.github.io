<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\ConnexionPourPostuler;

class ConnexionPourPostuler extends Controller
{

    public function index(string $id)
    { 
        
        $user = Auth::user();
        // récupérer l'offre avec l'id correspondant
       $offre = Offre::with('user')->find($id);
       
   
        // afficher la vue de la page de postulation
        return view('/connexionpourpostuler', ['offre' => $offre,'user' => $user]);
       
    }
    public function connexionpourpostuler(Request $request,string $id)

    {
    
        $email = $request->email;
        $password = $request->password;
        $id_offre = $request->input('id_offre'); // récupérer l'id de l'offre via la requête GET
    
        $user = User::where('email', "=", $email)->first();
        $offre = Offre::with('user')->find($id);
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            if ($user) {
                if ($user->role == 'postulant') {
                    return redirect()->route('postuleroffre', ['id_offre' => $offre->id]);
            }
        } elseif (!$user) {
            // L'utilisateur n'existe pas dans la base de données
            return redirect()->back()->withErrors(['email' => 'Adresse Email ou Mot de passe incorrect'])->withInput();
        }
    
        // Vérifier si le mot de passe est correct
        if (!Hash::check($password, $user->password)) {
            // Le mot de passe est incorrect
            return redirect()->back()->withErrors(['password' => 'Adresse Email ou Mot de passe incorrect'])->withInput();
        }
    }
    
}
}
