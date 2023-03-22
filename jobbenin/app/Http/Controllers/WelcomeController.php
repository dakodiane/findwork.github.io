<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use App\Models\Freelancer;
use Illuminate\Http\Request;
use App\Http\Controllers\WelcomeController;

class WelcomeController extends Controller
{

    //////////////////////////////////DJEMI////////////////////
    public function index()
{
    $offres = Offre::whereIn('id', [22, 23,24])->with('recruteur')->get();
    $freelancers = Freelancer::whereIn('id', [22, 23, 24])
        ->select('nomF', 'prenomF', 'service')
        ->get();
    return view('welcome', compact('offres', 'freelancers'));
}
    
}
