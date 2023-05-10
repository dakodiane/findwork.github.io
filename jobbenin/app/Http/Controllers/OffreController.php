<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Offre;
use App\Models\Postuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

    }

    ///////////////// DJEMI /////////////
    public function offre() {
        $offres = Offre::with('user')
            ->whereHas('user', function ($query) {
                $query->where('active', '=', 1)
                    ->whereNotNull('logo_entreprise');
            })
            ->where('publication', '=', 1) 
            ->where('modification', '=', 0)
            ->get();
        return view('offre', ['offres'=>$offres]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $user = Auth::user();

        $offre = Offre::with('user')->find($id);
        $aDejaPostule = false;
        if ($user) {
            $postuler = Postuler::where('id_user', $user->id)
                ->where('id_offre', $id)
                ->first();
    
            if ($postuler) {
                $aDejaPostule = true;
            }
        }
        return view('detail_offre', ['offre' => $offre, 'user' => $user, 'aDejaPostule' => $aDejaPostule]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $offre = Offre::with('user')->find($id);
        $user = Auth::user();
        $offre->poste = $request->input('poste');
        $offre->description_offre = $request->input('description_offre');  
          // Pour enregistrer les informations complèter par l'utilisateur
        $offre->secteurO = $request->input('secteurO');
        $offre->salaireO= $request->input('salaireO'); 
        $offre->datfin= $request->input('datfin');
        $offre->typeO= $request->input('typeO');
        $offre->villeO= $request->input('villeO');
        $offre->description_offre = $request->input('description_offre');
        $offre->diplome= $request->input('diplome'); 
        $offre->competence_offre1= $request->input('competence_offre1');
        $offre->competence_offre2= $request->input('competence_offre2');
        $offre->competence_offre3= $request->input('competence_offre3');
        $offre->competence_offre4= $request->input('competence_offre4');
        $offre->competence_offre5= $request->input('competence_offre5');
        $offre->modification = 1; 
       $offre->save();     
        // Envoyer un message à l'utilisateur
        $message = "Votre Annonce a été soumise aux administrateurs pour analyse.
        Vous serez informés à sa publication.";
        return redirect()->route('annonce')->with('message', $message);
    }



    public function modifieroffre(string $id)
    {
        $offre = Offre::with('user')->find($id);
        if ($offre->publication == 1) {
            return view('modifieroffre', ['offre' => $offre]);
        } else {
            return redirect()->route('annonce');
        }
    }
    public function supprimeroffre(string $id)
    {
        //
        $offre = Offre::with('user')->find($id);
        if ($offre) {

        DB::table('offres')
            ->where('id_user', $offre->user->id)
            ->where('id', $offre->id)
            ->update(['supprimeroffre' => 1]); 

            return redirect()->back()->with('success', 'Le fichier a été téléchargé avec succès!');
    }
}

public function search(Request $request)
{
    $query = Offre::query();

    if ($request->has('secteurO')) {
        $query->where('secteurO', $request->input('secteurO'));
    }

    if ($request->has('villeO')) {
        $query->where('villeO', $request->input('villeO'));
    }

    $offres = $query->where('publication', '=', 1) 
                    ->where('modification', '=', 0) 
                    ->get();

    $count = $offres->count();

    return view('offre', compact('offres', 'count'));
}


}
