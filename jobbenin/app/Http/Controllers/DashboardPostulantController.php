<?php

namespace App\Http\Controllers;

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
           
        } $postulant =DB::table('users')->where('id',Auth::id())->first();
        $offres=DB::table ('offres')->where('id_user',Auth::id())->get();
        return view('dashboardpostulant')->with(['user'=>$user]);
    }
    public function vosoffres()
    {
        //
        $user = Auth::user();
        if (!$user) {
          return redirect()->route('vosoffres');
           
        } $postulant =DB::table('users')->where('id',Auth::id())->first();
        $offres=DB::table ('offres')->where('id_user',Auth::id())->get();

        return view('vosoffres')->with(['user'=>$user]);
    }
    public function recommandation()
    {
        //
        $user = Auth::user();
        if (!$user) {
          return redirect()->route('recommandation');
           
        } $postulant =DB::table('users')->where('id',Auth::id())->first();
        return view('recommandation')->with(['user'=>$user]);
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
