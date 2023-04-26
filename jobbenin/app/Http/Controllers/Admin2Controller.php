<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;

class Admin2Controller extends Controller
{
    public function offresNonPubliees() 
    {
        $offres = Offre::with('user')->whereNull('publication')->get();
        return view('Admin.nouvelpub', compact('offres'));
    }
}
