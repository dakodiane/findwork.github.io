<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardPostulantController;


class DashboardPostulantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth::user();
        if (!$user) {
            return redirect()->intended('connexion');
        }
        $postulant = User::join('beneficiers', 'users.id', '=', 'beneficiers.id_user')
    ->with('bénéficiers.offre')
    ->where('users.id', Auth::id())
    ->where('users.role', 'postulant')
    ->first();


        $offres = $postulant->bénéficiers->pluck('offre');
        
        return view('dashboardpostulant')->with(['user' => $user, 'offres' => $offres]);
        
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


 
}
