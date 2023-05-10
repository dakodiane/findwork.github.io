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
    
        if ($user->profil_complet == 0) {
            $message = 'Vous devez d\'abord compléter votre profil pour proposer vos services !!!';
        } else {
            $message = null;
        }
        
        return view('dashboardfreelancer', ['user' => $user, 'message' => $message]);
    }
    
    
    
 //Page ProfilFree
 public function profilfree()
 {
     $user = Auth::user();
     if (!$user) {
         return redirect()->intended('connexion');
     } if ($user->profil_complet == 0) {
        $message = 'Vous devez d\'abord compléter votre profil pour proposer vos services !!!';

    } 
    else {
        $message = null;
    }

    
    return view('profilfreelancer', ['user' => $user, 'message' => $message]);

 
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
    $request->validate([
        'name' => 'required|string|regex:/^[A-Za-z\s]+$/',
        'contact_freelancer' => 'required|numeric|regex:/^[0-9]+$/',
    ], [
        'name.required' => 'Le nom ne doit comporter que des lettres',
        'contact_freelancer.required' => 'Veuillez saisir un numéro valide.',
    ]);
    // Mettre à jour les informations de l'utilisateur
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->service_freelancer1 = $request->input('service_freelancer1');
    $user->service_freelancer2= $request->input('service_freelancer2');
    $user->service_freelancer3= $request->input('service_freelancer3');
    $user->service_freelancer4= $request->input('service_freelancer4');
    $user->service_freelancer5= $request->input('service_freelancer5');

    $user->description_free = $request->input('description_free');
    $user->competence_freelancer1 = $request->input('competence_freelancer1');
    $user->competence_freelancer2= $request->input('competence_freelancer2');
    $user->competence_freelancer3= $request->input('competence_freelancer3');
    $user->competence_freelancer4= $request->input('competence_freelancer4');
    $user->competence_freelancer5= $request->input('competence_freelancer5');

    $user->contact_freelancer = $request->input('contact_freelancer');

    $user->profil_complet = 1;


$user->save();
    // Télécharger et enregistrer la photo si elle a été envoyée
    if ($request->hasFile('photo_freelancer')) {
        $photo = $request->file('photo_freelancer');
        $filename = time() . '.' . $photo->getClientOriginalExtension();
        $path = $photo->storeAs('public/photosfreelancer', $filename);
        $user->photo_freelancer = $filename;
    }
    if ($user->service_freelancer1 && $user->service_freelancer2 && $user->service_freelancer3 && $user->service_freelancer4 && $user->competence_freelancer1 && $user->competence_freelancer2 && $user->competence_freelancer3 && $user->competence_freelancer4 && $user->descrption_free && $user->contact_freelancer) {
      
        $user->profil_complet = 1;
    }

    $user->save();

    return redirect()->route('profilfreelancer', $user->id)
        ->with('success', 'Profil mis à jour avec succès.');
}


}
