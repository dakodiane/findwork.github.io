<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModifierProfilFreelancerController extends Controller
{public function index() 
    {
        return view('modifier-profil-freelancer.index');
    }

    public function upload(ImageUploadRequest $request) 
    {
        $filename = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $filename);

        // save uploaded image filename here to your database

        return back()
            ->with('success','Image uploaded successfully.')
            ->with('image', $filename); 
    }  //
    //
}
