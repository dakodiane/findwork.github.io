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
        $offres = Offre::with('user')->where('publication','0')
        ->where ('id_user'->user->id )
        ->where('modification', '=', 0) 
        ->whereHas('user', function ($query) {
            $query->where('active', '=', 1);
           
        }) ->orderBy('datfin')->get();
        $offre_proche = $offres->first();
      
        return view('Admin.nouvelpub', ['offres' => $offres, 'offre_proche' => $offre_proche ]);


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
        $offres = Offre::with('user')->where('modification','1')
        ->where('publication', '=', 1) 
       
        ->whereHas('user', function ($query) {
            $query->where('active', '=', 1);
           
        })
     
        ->orderBy('datfin')->get();
        $offre_proche = $offres->first();
        return view('Admin.offremodif',  ['offres' => $offres, 'offre_proche' => $offre_proche]);


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
    
   
  
    public function touteslesoffres()
    {
        $offres = Offre::with('user')->orderBy('datfin')  
        ->where('publication', '=', 1) 
        ->where('modification', '=', 0) 
        ->whereHas('user', function ($query) {
            $query->where('active', '=', 1);
           
        })
        ->get();
        $offre_proche = $offres->first();
        return view('Admin.touteslesoffres', ['offres' => $offres, 'offre_proche' => $offre_proche]);
    }

    public function show3(string $id)
    {
        $offre = Offre::with('user')->findOrFail($id);
            
        return view('Admin.detailoffres', ['offre' => $offre]);    
    }

    
}
