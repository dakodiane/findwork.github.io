<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardFreelancerController;
use App\Http\Requests\ImageUploadRequest;

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

     return view('/profilfreelancer')->with(['user' => $user]);

 
 }
//M A J Des donnés de la Db




public function upload(Request $request)
{
    // Vérifiez si le fichier a été soumis
    if ($request->hasFile('photo_freelancer')) {
        
        $file = $request->file('photo_freelancer');
        
        // Validez que le fichier est une image
        $validImage = $file->isValid() && in_array($file->getMimeType(), ['image/jpeg', 'image/png', 'image/gif']);
        
        if ($validImage) {
            // Générez un nom unique pour le fichier
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            
            // Stockez le fichier dans le dossier de destination
            $file->storeAs('public/photosfreelancer', $fileName);
            
            // Mettez à jour l'objet utilisateur avec le nom du fichier
            $user = Auth::user();
            $user->photo_freelancer = $fileName;
            $user->save();
            
            return redirect()->back()->with('success', 'Le fichier a été téléchargé avec succès!');
        } else {
            return redirect()->back()->with('error', 'Le fichier doit être une image (JPG, PNG ou GIF).');
        }
    } else {
        return redirect()->back()->with('error', 'Le fichier est manquant.');
    }
}
public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    // Mettre à jour les informations de l'utilisateur
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->service_freelancer = $request->input('service_freelancer');
    $user->description_free = $request->input('description_free');
    $user->competence_freelancer = $request->input('competence_freelancer');
    $user->contact_freelancer = $request->input('contact_freelancer');

    // Télécharger et enregistrer la photo si elle a été envoyée
    if ($request->hasFile('photo_freelancer')) {
        $photo = $request->file('photo_freelancer');
        $filename = time() . '.' . $photo->getClientOriginalExtension();
        $path = $photo->storeAs('public/photosfreelancer', $filename);
        $user->photo_freelancer = $filename;
    }

    $user->save();

    return redirect()->route('profilfreelancer', $user->id)
        ->with('success', 'Profil mis à jour avec succès.');
}


}
