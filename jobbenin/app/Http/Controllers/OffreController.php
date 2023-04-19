<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Offre;
use Illuminate\Http\Request;
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

    ///////////////// DJEMI ///////////////////////////////////////////////////////////////////////
    public function offre() {
        $offres = Offre::with('user')->get();
        return view('offre',compact('offres'));
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
        return view('detail_offre', ['offre' => $offre], ['user' => $user]);

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

       $offre->save();
       return view('detail_offre', ['offre' => $offre]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function modifieroffre(string $id)
    {
        //
        $offre = Offre::with('user')->find($id);
        return view('modifieroffre', ['offre' => $offre]);
    }
  
}
