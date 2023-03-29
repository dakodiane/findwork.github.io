<?php

namespace App\Http\Controllers;

use auth;
use Illuminate\Http\Request;
use App\Models\ModifierProfilFreelancer;

class ModifierProfilFreelancerController extends Controller
{
   


    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048'
        ]);
        
        $imagePath = $request->file('image')->store('images', 'public');

        $id = Auth::id();
        $profil = ModifierProfilFreelancer::findOrFail($id);
        $profil->photo_freelancer = $imagePath;
        $profil->save();

        return back()
            ->with('success', 'L\'image a été téléchargée avec succès.');
    }


}
