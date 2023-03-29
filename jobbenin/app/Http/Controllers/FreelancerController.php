<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Freelancer;
use Faker\Provider\UserAgent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class FreelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //

        $users = User::where('role', '=', 'freelancer')
            ->get();
        return view('freelancer', compact('users'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        //
        $users = User::find($id);
        return view('detail_free', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function contact(Request $request,string $id)
{
    $user = User::find($id);

    // Récupère le numéro de téléphone du freelancer
    $contact_freelancer = $user->contact_freelancer;
    $lien_whatsapp = "https://wa.me/{$contact_freelancer}";

    return view('detail_free', ['user' => $user, 'lien_whatsapp' => $lien_whatsapp]);

}

    
}
