<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class Admin1Controller extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $recruteurs = DB::table('users')->where('role', 'recruteur')->count();
        $postulants = DB::table('users')->where('role', 'postulant')->count();
        $freelancers = DB::table('users')->where('role', 'freelancer')->count();
        $offres = DB::table('offres')->count();



        return view('Admin/tableaudebord', [
            'recruteurs' => $recruteurs,
            'postulants' => $postulants,
            'freelancers' => $freelancers,
            'offres' => $offres
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function recruteur()
    {
        //
        $recruteurs = User::where('role', 'recruteur')->get();
        return view('Admin.recruteur', ['recruteurs' => $recruteurs]);
    }

    public function postulant()
    {
        //
        $postulants = User::where('role', 'postulant')->get();
        return view('Admin.postulant', ['postulants' => $postulants]);
    }
    public function freelancer()
    {
        //
        $freelancers = User::where('role', 'freelancer')->get();
        return view('Admin.freelancer', ['freelancers' => $freelancers]);
    }
    
    public function desactiverutilisateur($id)
    {
        $recruteurs = User::findOrFail($id);
       
        DB::table('users')
            ->where([
                'id' => $recruteurs->id,
            ])
            ->update(['active' => 0]);

        return redirect()->back()->with('success', 'Postulant sélectionné avec succès!');
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


