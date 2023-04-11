<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardFreelancerController;

class DashboardFreelancerController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->intended('connexion');
        }
    
        
       
     
        return view('dashboardfreelancer')->with(['user' => $user]);
       
    }
    
 //Page ProfilFree
 public function profilfree()
 {
     $user = Auth::user();
     if (!$user) {
         return redirect()->intended('connexion');
     }

     return view('profilfreelancer')->with(['user' => $user]);

 
 }
//M A J Des donnés de la Db

public function update(Request $request, $id)
{ 
     $user = auth()->user();

    $user->name = $request->input('name');
    $user->email = $request->input('email');
     // Pour enregistrer les informations complèter par l'utilisateur
     $user->photo_freelancer= $request->input('photo_freelancer');
    $user->service_freelancer= $request->input('service_freelancer');
    $user->competence_freelancer= $request->input('competence_freelancer');
    $user->description_free= $request->input('description_free');

        $user->save();

    return redirect()->route('profilfreelancer')->with('success', 'Informations mises à jour avec succès');

}


}
