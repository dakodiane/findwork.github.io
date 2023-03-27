<?php

namespace App\Http\Controllers;

use App\Models\Freelancer;
use Illuminate\Http\Request;

class InscriptionFreelancerController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('inscriptionfreelancer');

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

    public function inscriptionfreelancer(Request $request)
    {
        //
        $freelancer=new Freelancer();

        $freelancer->nomF =$request->nomF;
        $freelancer->prenomF =$request->prenomF;
        $freelancer->emailF =$request->emailF;
        $freelancer->mdpF=$request->mdpF;
      


     
        $freelancer->save();

     
    }
}
