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
        

      if (Auth::attempt (['email' => $email, 'password' => $password])) {

        $user=User:: where ('email' ,"=", $email)->first();
                if ($user->role=='recruteur') {
                    $request->session()->regenerate();

                  return redirect()->intended('dashboardrecruteur');   

                }
                            
            elseif ($user->role=='postulant') {

                $request->session()->regenerate();

                return redirect()->intended('dashboardpostulant');   
                              }  
            elseif($user->role=='freelancer') {
                $request->session()->regenerate();

                return redirect()->intended('dashboardfreelancer');   
                              }  
            else 

            return redirect()->intended('');   

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
