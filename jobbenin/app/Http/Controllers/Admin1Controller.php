<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;

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



        return view('Admin.tableaudebord', [
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
    
    public function desactiverrecruteur($id)
    {
        $recruteurs = User::findOrFail($id);
       
        DB::table('users')
            ->where([
                'id' => $recruteurs->id,
            ])
            ->update(['active' => 0]);


        return redirect()->back()->with('success', 'Postulant sélectionné avec succès!');
    }
    public function activerrecruteur($id)
    {
        $recruteurs = User::findOrFail($id);
       
        DB::table('users')
            ->where([
                'id' => $recruteurs->id,
            ])
            ->update(['active' => 1]);

        return redirect()->back()->with('success', 'Postulant sélectionné avec succès!');
    }

    public function desactiverpostulant($id)
    {
        $postulants = User::findOrFail($id);
       
        DB::table('users')
            ->where([
                'id' => $postulants->id,
            ])
            ->update(['active' => 0]);

        return redirect()->back()->with('success', 'Postulant sélectionné avec succès!');
    }
    public function activerpostulant($id)
    {
        $postulants = User::findOrFail($id);
       
        DB::table('users')
            ->where([
                'id' => $postulants->id,
            ])
            ->update(['active' => 1]);

        return redirect()->back()->with('success', 'Postulant sélectionné avec succès!');
    }
    public function desactiverfreelancer($id)
    {
        $freelancers = User::findOrFail($id);
       
        DB::table('users')
            ->where([
                'id' => $freelancers->id,
            ])
            ->update(['active' => 0]);

        return redirect()->back()->with('success', 'Postulant sélectionné avec succès!');
    }
    public function activerfreelancer($id)
    {
        $freelancers = User::findOrFail($id);
       
        DB::table('users')
            ->where([
                'id' => $freelancers->id,
            ])
            ->update(['active' => 1]);

        return redirect()->back()->with('success', 'Postulant sélectionné avec succès!');
    }
    public function inscriptionadmin(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:recruteur,postulant,freelancer',
        ], [
            'name.required' => 'Veuillez saisir votre nom.',
            'email.required' => 'Veuillez saisir votre adresse e-mail.',
            'email.email' => 'Veuillez saisir une adresse e-mail valide.',
            'email.unique' => 'Cette adresse e-mail est déjà utilisée.',
            'password.required' => 'Veuillez saisir votre mot de passe.',
            'password.min' => 'Le mot de passe doit contenir au moins :min caractères.',
            'password.confirmed' => 'Les mots de passe ne correspondent pas.',
          
        ]);
    
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->ville = $request->ville;

        $admin->save();
    
        return redirect()->intended('connexionadmin');
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


