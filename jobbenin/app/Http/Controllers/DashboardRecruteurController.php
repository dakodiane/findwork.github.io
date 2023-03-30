<?php

namespace App\Http\Controllers;

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
        $recruteur = DB::table('users')->where('id', Auth::id())->first();

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

    public function attentecv()
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
        return view('attentecv')->with(['user' => $user, 'offres' => $offres]);
    }
    public function selectioncv()
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
        return view('selectioncv')->with(['user' => $user, 'offres' => $offres]);
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
