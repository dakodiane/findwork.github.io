<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $offre = Offre::with('user')->findOrFail($id);
            
        return view('Admin.detailnouvelpub', ['offre' => $offre]);    
    }

    
    public function validerpub($id_offre)
    {
        $offre = Offre::with('user')->findOrFail($id_offre);
       
        $offre->publication = 1;
        $offre->save();
    
        return redirect()->route('admin.nouvelpub')->with('success', 'Offre publiée avec succès');
    }
    

    public function offremodif() 
    {   
        $offres = Offre::with('user')->where('modification','1')->get();
    
        return view('Admin.offremodif', compact('offres'));


    }
    public function show2(string $id)
    {
        $offre = Offre::with('user')->findOrFail($id);
            
        return view('Admin.detailoffremodif', ['offre' => $offre]);    
    }

    public function valideroffremodif($id_offre)
    {
        $offre = Offre::with('user')->findOrFail($id_offre);
       
        $offre->modification = 0;
        $offre->save();
    
        return redirect()->route('admin.offremodif')->with('success', 'Offre publiée avec succès');
    }
    
   
  

}
