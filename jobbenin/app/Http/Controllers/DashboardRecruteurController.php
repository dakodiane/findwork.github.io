<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Postuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardRecruteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $user = Auth::user();

        if (!$user) {
            return redirect()->intended('connexion');
        }
        // Récupérez les informations du recruteur connecté à partir de la table users
        $user = DB::table('users')->where('id', Auth::id())->first();

        // Récupérez les offres du recruteur à partir de la table offres
        $offres = DB::table('offres')->where('id_user', Auth::id())->get();


        // Passez les informations du recruteur et ses offres à la vue du tableau de bord
        return view('dashboardrecruteur')->with(['user' => $user, 'offres' => $offres]);
    }
    public function brouillon()
    {
        //

        $user = Auth::user();

        if (!$user) {
            return redirect()->intended('connexion');
        }
        // Récupérez les informations du recruteur connecté à partir de la table users
        $recruteur = DB::table('users')->where('id', Auth::id())->first();

        // Récupérez les offres du recruteur à partir de la table offres
        $offres = DB::table('offres')->where('id_user', Auth::id())->get();


        // Passez les informations du recruteur et ses offres à la vue du tableau de bord
        return view('brouillon')->with(['user' => $user, 'offres' => $offres]);
    }

    public function attentecv(Request $request)
    {
        
        $user = auth()->user();
        if ($user->role == 'recruteur') {
            $offres = $user->offre;
            $data = [];
        
            foreach ($offres as $offre) {
                foreach ($offre->postulers as $postul) {
                    if ($postul && $postul->user && $postul->suppression == 1 && $postul->selection == 0 && $postul->postulantvisible == 1) {
                        $data[] = [
                            'id_user' => $postul->id_user,
                            'id_offre' => $postul->id_offre,
                            'nom_recruteur' => $user->name,
                            'nom_postulant' => $postul->user->name,
                            'cv' => $postul->cv,
                            'poste' => $offre->poste,
                        ];
                        
                        // Stockage des valeurs de id_user et id_offre
                        $id_user = $postul->id_user;
                        $id_offre = $postul->id_offre;
                    }
                }
            }
        
            return view('attentecv', ['data' => $data, 'user' => $user, 'id_user' => $id_user ?? null, 'id_offre' => $id_offre ?? null]);
        }
        
    }


    public function selectioncv()
    {
        $user = auth()->user();
        if ($user->role == 'recruteur') {
            $offres = $user->offre;
            $data = [];

            foreach ($offres as $offre) {
                foreach ($offre->postulers as $postulant) {
                    if ($postulant && $postulant->user && $postulant->suppression == 0 && $postulant->selection == 1) {
                        $data[] = [
                            'id_user' => $postulant->id_user,
                            'id_offre' => $postulant->id_offre,
                            'nom_recruteur' => $user->name,
                            'nom_postulant' => $postulant->user->name,
                            'cv' => $postulant->cv,
                            'poste' => $offre->poste,
                        ];
                    }
                }
            }
            
            $success = session()->get('success');
            $id_user = $postulant->id_user;
            $id_offre = $postulant->id_offre;            

            return view('selectioncv', ['data' => $data, 'user' => $user, 'id_user' => $id_user, 'id_offre' => $id_offre, 'success' => $success]);
        }
    }
    

    public function selectionner(Request $request, $id_user, $id_offre)
    {
        $postuler = Postuler::where('id_user', $id_user)->where('id_offre', $id_offre)->first();
        if ($postuler) {
            DB::table('postulers')
                ->where('id_user', $postuler->id_user)
                ->where('id_offre', $postuler->id_offre)
                ->update(['suppression' => 0, 'selection' => 1]);
            return redirect()->route('attentecv')->with('success', 'Postulant sélectionné avec succès!');
        } else {
            return redirect()->back()->with('error', 'Postulant introuvable!');
        }
    }
    
    

    
    public function supprimerpostulant($id_user, $id_offre)
    {
        $postuler = Postuler::where('id_user', $id_user)->where('id_offre', $id_offre)->first();

        DB::table('postulers')
            ->where([
                'id_user' => $postuler->id_user,
                'id_offre' => $postuler->id_offre,
            ])
            ->update(['postulantvisible' => 0]);

        return redirect()->route('attentecv')->with('success', 'Postulant sélectionné avec succès!');
    }

     

    
           
    
  

    public function annonce()
    {
        //

        $user = Auth::user();

        if (!$user) {
            return redirect()->intended('connexion');
        }
        // Récupérez les informations du recruteur connecté à partir de la table users
        $recruteur = DB::table('users')->where('id', Auth::id())->first();

        // Récupérez les offres du recruteur à partir de la table offres
        $offres = DB::table('offres')->where('id_user', Auth::id())->get();


        // Passez les informations du recruteur et ses offres à la vue du tableau de bord
        return view('annonce')->with(['user' => $user, 'offres' => $offres]);
    }
    public function entretien()
    {
        //

        $user = Auth::user();

        if (!$user) {
            return redirect()->intended('connexion');
        }
        // Récupérez les informations du recruteur connecté à partir de la table users
        $recruteur = DB::table('users')->where('id', Auth::id())->first();

        // Récupérez les offres du recruteur à partir de la table offres
        $offres = DB::table('offres')->where('id_user', Auth::id())->get();


        // Passez les informations du recruteur et ses offres à la vue du tableau de bord
        return view('entretien')->with(['user' => $user, 'offres' => $offres]);
    }


    public function publicite()
    {
        //

        $user = Auth::user();

        if (!$user) {
            return redirect()->intended('connexion');
        }
        // Récupérez les informations du recruteur connecté à partir de la table users
        $recruteur = DB::table('users')->where('id', Auth::id())->first();

        // Récupérez les offres du recruteur à partir de la table offres
        $offres = DB::table('offres')->where('id_user', Auth::id())->get();


        // Passez les informations du recruteur et ses offres à la vue du tableau de bord
        return view('publicite')->with(['user' => $user, 'offres' => $offres]);
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
    public function update(Request $request, $id)
    {
        $user = auth()->user();

        $user->name = $request->input('name');
        $user->email = $request->input('email') ?? null;
        // Pour enregistrer les informations complèter par l'utilisateur
        $user->villeR = $request->input('villeR');
        $user->description_recruteur = $request->input('description_recruteur');


        $user->save();

        return redirect()->route('profilrecruteur', ['id' => $user->id])->with('success', 'Informations mises à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}