<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Offre;
use App\Models\Postuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostulerOffreController extends Controller
{
    public function postulerOffre(Request $request, string $id_offre) {

        // Vérifier si l'utilisateur est connecté
        if (!Auth::check()) {
            return redirect()->route('connexion')->with('error', 'Vous devez vous connecter pour postuler à une offre');
        }
    
        // Récupérer l'utilisateur connecté et l'offre correspondante
        $user = Auth::user();
        $offre = Offre::find($id_offre);
    
        // Vérification si l'utilisateur a déjà postulé à l'offre
        $postuler = Postuler::where('id_offre', $offre->id)
                             ->where('id_user', $user->id)
                             ->first();
                             
        if ($postuler) {
            return redirect()->route('vosoffres')->with('error', 'Vous avez déjà postulé à cette offre');
        }
    

        $postuler = new Postuler();
        $postuler->id_offre = $offre->id;
        $postuler->id_user = $user->id;
     
    
        // Gérer le fichier CV s'il est présent
        if ($request->hasFile('cv')) {
            $cv = $request->file('cv');
    
            // Vérifier que le fichier est un document valide
            $validDoc = $cv->isValid() && in_array($cv->getMimeType(), [

                'application/pdf',
                'application/msword',
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                'application/vnd.ms-excel',
                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
            ]);
    
            if (!$validDoc) {
                return redirect()->back()->with('error', 'Le fichier doit être un document (PDF, Word, Excel, etc.).');
            }
    
            // Générer un nom unique pour le fichier et le stocker dans le dossier de destination
            $filename = uniqid() . '.' . $cv->getClientOriginalExtension();
            $cv->storeAs('public/cv', $filename);
    
            // Enregistrer le nom du fichier dans l'objet Postuler
            $postuler->cv = $filename;
      
            if ($request->hasFile('lettre_motivation')) {
                $lettre_motivation = $request->file('lettre_motivation');
            
                // Vérifier que le fichier est un document valide
                $validDoc = $lettre_motivation->isValid() && in_array($lettre_motivation->getMimeType(), [        'application/pdf',        'application/msword',        'application/vnd.openxmlformats-officedocument.wordprocessingml.document',        'application/vnd.ms-excel',        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'    ]);
            
                if (!$validDoc) {
                    return redirect()->back()->with('error', 'Le fichier doit être un document (PDF, Word, Excel, etc.).');
                }
            
                // Générer un nom unique pour le fichier et le stocker dans le dossier de destination
                $filename = uniqid() . '.' . $lettre_motivation->getClientOriginalExtension();
                $lettre_motivation->storeAs('public/lettre_motivation', $filename);
            
                // Enregistrer le nom du fichier dans l'objet Postuler
                $postuler->lettre_motivation = $filename;
            }
            
      
      
        }
    
        $postuler->save();
    
        return redirect()->route('vosoffres')->with(['user' => $user,'offre' =>$offre,'postuler' =>$postuler]);
    }
    
    
    
    public function show(string $id_offre)
    {
        $user = Auth::user();
     // récupérer l'offre avec l'id correspondant
    $offre = Offre::find($id_offre);
      // Récupérer le nom de l'utilisateur
      $name = $user->name;
    // afficher la vue de la page de postulation
    return view('postuleroffre', ['offre' => $offre,'user' => $user]);
    }
    
    
 

}