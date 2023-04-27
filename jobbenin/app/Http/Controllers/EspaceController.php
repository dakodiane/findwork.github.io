<?php

namespace App\Http\Controllers;

use App\Models\connexion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EspaceController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = auth()->user();
        
        if ($user) {

            if ($user->role == 'recruteur') {
                $request->session()->regenerate();

                return redirect()->intended('annonce');
            } elseif ($user->role == 'postulant') {

                $request->session()->regenerate();
               
                return redirect()->intended('vosoffres');
            } elseif ($user->role == 'freelancer') {
                $request->session()->regenerate();

                return redirect()->intended('dashboardfreelancer');
            } 
        }
      
    
    elseif (!$user) {
        return redirect()->intended('connexion');
    }

    }

}