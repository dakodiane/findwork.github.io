<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ModifierProfilFreelancerController;

class ModifierProfilFreelancerController extends Controller
{
    
    public function store(Request $request)
{
    // Validation des champs
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        // ... autres champs ...
        'photo' => 'nullable|image|max:4096', // max 4 MB
    ]);

    // Récupération de l'image téléchargée
    if ($request->hasFile('photo')) {
        $photo = $request->file('photo');
        $photoPath = $photo->store('public');
        $validatedData['photo'] = $photoPath;
    }

    // Création du freelancer
    Freelancer::create($validatedData);

    // Redirection
    return redirect()->route('freelancer.index');
}

}
   

