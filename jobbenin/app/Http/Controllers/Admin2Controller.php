<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PublicationOffreNotification;
use App\Notifications\ModificationOffreNotification;
use App\Notifications\RejetPublicationOffreNotification;
use App\Notifications\RejetModificationOffreNotification;

class Admin2Controller extends Controller
{
    
 
    public function offresNonPubliees()
    {
        $offres = Offre::with('user')
            ->where('publication', 0)
            ->where('modification', 0) 
            ->where('rejet_offre', 0) 
            ->whereHas('user', function ($query) {
                $query->where('active', 1);
            })
            ->orderBy('datfin')
            ->get()
            ->map(function ($offre) {
                return $offre->findOrFail($offre->id);
            });
    
        $offre_proche = $offres->first();
    
        return view('Admin.nouvelpub', [
            'offres' => $offres,
            'offre_proche' => $offre_proche
        ]);
    }

    public function show(string $id_user, string $id_offre)
    {
        $offre = Offre::with('user')->where('id_user', $id_user)->findOrFail($id_offre);

                return view('Admin.detailnouvelpub', ['offre' => $offre]);
    }
    

    public function validerpub(string $id_user, string $id_offre)
    {
        $offre = Offre::with('user')
            ->where('id_user', $id_user)
            ->findOrFail($id_offre);
    
        $offre->publication = 1;
        $offre->save();
    
        $user = User::find($id_user);
        $user->notify(new PublicationOffreNotification($offre));
    
        return redirect()->route('admin.nouvelpub');
    }
    

    public function rejeterpub(string $id_user, string $id_offre)
    {
        $offre = Offre::with('user')
            ->where('id_user', $id_user)
            ->findOrFail($id_offre);
    
        $offre->rejet_offre = 1;
        $offre->save();
    
        $user = User::find($id_user);
        $user->notify(new RejetPublicationOffreNotification($offre));
    
        return redirect()->route('admin.nouvelpub');
    }

    public function offremodif() 
    {   
        $offres = Offre::with('user')->where('modification','1')

       
        ->whereHas('user', function ($query) {
            $query->where('active', '=', 1);
           
        })
     
        ->orderBy('datfin')->get();
        $offre_proche = $offres->first();
        return view('Admin.offremodif',  ['offres' => $offres, 'offre_proche' => $offre_proche]);


    }
    public function show2(string $id_user, string $id_offre)
    {
        
        $offre = Offre::with('user')->where('id_user', $id_user)->findOrFail($id_offre);
            
        return view('Admin.detailoffremodif', ['offre' => $offre]);    
    }

    public function valideroffremodif(string $id_user, string $id_offre)
    {
        
        $offre = Offre::with('user')
            ->where('id_user', $id_user)
            ->findOrFail($id_offre);
       
        $offre->modification = 0;
        $offre->save();
        $user = User::find($id_user);
        $user->notify(new ModificationOffreNotification($offre));
        return redirect()->route('admin.offremodif')->with('success', 'Offre publiée avec succès');
    }
    
    public function rejetermodifpub(string $id_user, string $id_offre)
    {
        $offre = Offre::with('user')
            ->where('id_user', $id_user)
            ->findOrFail($id_offre);
             $offre->modification = 0;
             $offre->rejetmodif_offre = 1;
             $offre->save();
    
        $user = User::find($id_user);
        $user->notify(new RejetModificationOffreNotification($offre));
    
        return redirect()->route('admin.offremodif');
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
