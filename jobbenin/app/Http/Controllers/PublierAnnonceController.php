<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublierAnnonceController extends Controller
{
  
    // //
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




    // Créer une nouvelle instance de modèle Annonce
    $offre = new Offre();

    // Définir les attributs de l'annonce
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

    // Enregistrer l'offre dans la base de données
    $offre->save();
    return redirect()->route('detail_offre', ['id' => $offre->id])->with('success', 'Informations mises à jour avec succès');

}

}  




