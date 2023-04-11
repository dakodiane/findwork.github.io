<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Offre;
use App\Models\Postuler;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Termwind\Components\Element;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('');
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
    public function show()
    {
        // Récupérer tous les postulants avec leurs informations de candidature

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
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
       
    }
    public function delete($id) {
        $postulant = Offre::find($id);
        $postulant->suppression = 0;
        $postulant->save();
    
        DB::table('postulers')
            ->where('id_user', $postulant->id_user)
            ->update(['suppression' => 0]);
    
        return redirect()->back()->with('success', 'Offre rendue non visible avec succès.');
    }
    
    
    
    
    
    


    public function selection(Request $request, $id)
    {
        $user = Postuler::with('offre')->findOrFail($id);
        if ($request->has('selectionner')) {
            // Vérifier si l'utilisateur a déjà été sélectionné
            $selection = session('selection', []);
            // Ajouter le postulant à la liste de sélection
            $offres = $user->offre;
            foreach ($offres as $offre) {
                foreach ($offre->postulers as $postulant) {
                    $selection[] = [
                        'id' => $user->id,
                        'nom_recruteur' => auth()->user()->name,
                        'nom_postulant' => $postulant->user->name,
                        'cv' => $postulant->cv,
                        'poste' => $offre->poste,
                    ];
                    session(['postulant_selectionne' => [
                        'nom_recruteur' => auth()->user()->name,
                        'nom_postulant' => $postulant->user->name,
                        'cv' => $postulant->cv,
                        'poste' => $offre->poste,
                    ]]);

                    // Supprimer le postulant de la liste d'attente

                }
            }
            session(['selection' => $selection]);

            // Rediriger vers la page de sélection
            return view('attentecv', ['user'=>$user]);
        }
    }
}
