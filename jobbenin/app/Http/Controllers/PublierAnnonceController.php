<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublierAnnonceController extends Controller
{
  
    public function index(Request $request)
    {
   
        // Créer une nouvelle instance de modèle Annonce
        return view('publierannonce');
    }

    public function publierAnnonce(Request $request)
    {
        // Récupérer les données de l'annonce à partir de la requête
        $secteurO = $request->input('secteurO');
        $poste = $request->input('poste');
        $datfin = $request->input('datfin');
        $salaireO = $request->input('salaireO');
        $typeO = $request->input('typeO');
        $villeO = $request->input('villeO');
        $description_offre = $request->input('description_offre');
        $diplome = $request->input('diplome');
        $competence_offre1 = $request->input('competence_offre1');
        $competence_offre2 = $request->input('competence_offre2');
        $competence_offre3 = $request->input('competence_offre3');
        $competence_offre4 = $request->input('competence_offre4');
        $competence_offre5 = $request->input('competence_offre5');
    
        $offre = new Offre();
      // Définir les attributs de l'offre
        $offre->secteurO = $secteurO;
        $offre->poste = $poste;
        $offre->datfin = $datfin;
        $offre->salaireO = $salaireO;
        $offre->typeO = $typeO;
        $offre->villeO = $villeO;
        $offre->description_offre = $description_offre;
        $offre->diplome = $diplome;
        $offre->competence_offre1 = $competence_offre1;
        $offre->competence_offre2 = $competence_offre2;
        $offre->competence_offre3 = $competence_offre3;
        $offre->competence_offre4 = $competence_offre4;
        $offre->competence_offre5 = $competence_offre5;
        $offre->id_user = Auth::id();
        $offre->publication = 0; // définir la publication sur 0 pour l'offre à soumettre
    
        // Enregistrer l'offre dans la base de données
        $offre->save();
    
        // Envoyer un message à l'utilisateur
        $message = "Votre Annonce a été soumise aux administrateurs pour analyse.
        Vous serez informés à sa publication.";
        return redirect()->route('annonce')->with('message', $message);
    }
    

}  




