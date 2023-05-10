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
        ->where('active',1)
        ->where('profil_complet',1)
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

    public function searchfreelancer(Request $request)
    {
        $query = User::where('role', '=', 'freelancer')
        ->where('active',1)
        ->where('profil_complet',1);

        if ($request->has('service_freelancer1')) {
            $service = $request->input('service_freelancer1');
            $query->where(function ($query) use ($service) {
                $query->where('service_freelancer1', 'like', '%'.$service.'%')
                      ->orWhere('service_freelancer2', 'like', '%'.$service.'%')
                      ->orWhere('service_freelancer3', 'like', '%'.$service.'%')
                      ->orWhere('service_freelancer4', 'like', '%'.$service.'%')
                      ->orWhere('service_freelancer5', 'like', '%'.$service.'%')
                      ->orWhere('competence_freelancer1', 'like', '%'.$service.'%')
                      ->orWhere('competence_freelancer2', 'like', '%'.$service.'%')
                      ->orWhere('competence_freelancer3', 'like', '%'.$service.'%')
                      ->orWhere('competence_freelancer4', 'like', '%'.$service.'%')
                      ->orWhere('competence_freelancer5', 'like', '%'.$service.'%');


            });
        }
        
        $users = $query->get();
    
        $count = $users->count();
    
        return view('freelancer', compact('users', 'count'));
    }

    
}
