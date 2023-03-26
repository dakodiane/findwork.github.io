<?php

namespace App\Http\Controllers;

use App\Models\Postulant;
use Illuminate\Http\Request;

class InscriptionPostulantController extends Controller
{
    //
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('inscriptionpostulant');

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
        $request->authenticate();

        $request->session()->regenerate();
        
       return redirect()->intended('/dashboardpostulant');
    
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

    public function inscriptionpostulant(Request $request)
    {
        //
        $postulant=new Postulant();

        $postulant->nomP =$request->nomP;
        $postulant->prenomP =$request->prenomP;
        $postulant->emailP =$request->emailP;
        $postulant->mdpP =$request->mdpP;
     
        $postulant->save();

     
    }


}
