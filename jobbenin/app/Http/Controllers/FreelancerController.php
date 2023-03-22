<?php

namespace App\Http\Controllers;
use App\Models\Freelancer;
use Illuminate\Http\Request;
use App\Http\Controllers\FreelancerController;


class FreelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

////////////////DJEMI/////////////////////////////////////////////////

        public function freelancer (){
             $freelancers=Freelancer::select('nomF', 'prenomF', 'service')->get();
            return view('freelancer',compact('freelancers'));
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
