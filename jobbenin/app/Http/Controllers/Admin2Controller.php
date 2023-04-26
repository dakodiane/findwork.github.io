<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin2Controller extends Controller
{
    public function offresNonPubliees() 
    {
        $offres = Offre::with('user')->where('publication','0')->get();
  
        return view('Admin.nouvelpub', compact('offres'));


    }

    public function show(string $id)
    {
       

        $offre = Offre::with('user')->find($id);
        
        return view('admin/detailnouvelpub', ['offre' => $offre]);

    
        }
       
}
