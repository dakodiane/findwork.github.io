<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ConnexionController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('connexion');
    }

    public function connexion(Request $request)
    {

        $email = $request->email;
        $password = $request->password;


            $user = User::where('email', "=", $email)->first();

        if (Auth::attempt(['email' => $email, 'password' => $password])) {


            if ($user) {

                if ($user->role == 'recruteur') {
                    $request->session()->regenerate();

                    return redirect()->intended('dashboardrecruteur');
                } elseif ($user->role == 'postulant') {

                    $request->session()->regenerate();

                    return redirect()->intended('dashboardpostulant');
                } elseif ($user->role == 'freelancer') {
                    $request->session()->regenerate();

                    return redirect()->intended('dashboardfreelancer');
                } 
            }
          
        }
        elseif (!$user) {
            // L'utilisateur n'existe pas dans la base de données
            return redirect()->back()->withErrors(['email' => 'Adresse Email ou Mot de passe incorrect'])->withInput();
        }

        // Vérifier si le mot de passe est correct
        if (!Hash::check($password, $user->password)) {
            // Le mot de passe est incorrect
            return redirect()->back()->withErrors(['password' => 'Adresse Email ou Mot de passe incorrect'])->withInput();
        }
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
