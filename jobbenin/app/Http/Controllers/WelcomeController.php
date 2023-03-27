<?php

namespace App\Http\Controllers;

use index;
use App\Models\Offre;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
   
    public function index()
{
  
    $offres = Offre::with('user')->get();
   
     $freelancers =User::where('role', 'freelancer')
      ->orderby('id')
      ->limit(2)
      ->get(['name','service_freelancer']);
      return view('welcome', compact('offres','freelancers' ));
    
}
   
   
}