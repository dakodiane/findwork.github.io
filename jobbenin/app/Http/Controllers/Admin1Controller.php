<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Admin1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $recruteurs = DB::table('users')->where('role', 'recruteur')->where('active',1)->count();
        $postulants = DB::table('users')->where('role', 'postulant')->count();
        $freelancers = DB::table('users')->where('role', 'freelancer')->where('active',1)->count();
        $offres = DB::table('offres')
        ->join('users', 'offres.id_user', '=', 'users.id')
        ->where('users.active', '=', 1)
        ->where('publication','=','1')
        ->where('modification','=','0')

        ->count();
        $adminId = Auth::id();
        $admin = Admin::find($adminId);

        return view('Admin.tableaudebord', [
            'recruteurs' => $recruteurs,
            'postulants' => $postulants,
            'freelancers' => $freelancers,
            'offres' => $offres,
            'admin' => $admin,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function recruteur()
    {
        //
        $recruteurs = User::where('role', 'recruteur')->orderBy('created_at', 'desc')->get();
        return view('Admin.recruteur', ['recruteurs' => $recruteurs]);
    }

    public function postulant()
    {
        //
        $postulants = User::where('role', 'postulant')->orderBy('created_at', 'desc')->get();
        return view('Admin.postulant', ['postulants' => $postulants]);
    }
    public function freelancer()
    {
        //
        $freelancers = User::where('role', 'freelancer')->orderBy('created_at', 'desc')->get();
        return view('Admin.freelancera', ['freelancers' => $freelancers]);
    }

    public function desactiverrecruteur($id)
    {
        $recruteurs = User::findOrFail($id);

        DB::table('users')
            ->where([
                'id' => $recruteurs->id,
            ])
            ->update(['active' => 0]);


        return redirect()->back()->with('success', 'Postulant sélectionné avec succès!');
    }
    public function activerrecruteur($id)
    {
        $recruteurs = User::findOrFail($id);

        DB::table('users')
            ->where([
                'id' => $recruteurs->id,
            ])
            ->update(['active' => 1]);

        return redirect()->back()->with('success', 'Postulant sélectionné avec succès!');
    }

    public function desactiverpostulant($id)
    {
        $postulants = User::findOrFail($id);

        DB::table('users')
            ->where([
                'id' => $postulants->id,
            ])
            ->update(['active' => 0]);

        return redirect()->back()->with('success', 'Postulant sélectionné avec succès!');
    }
    public function activerpostulant($id)
    {
        $postulants = User::findOrFail($id);

        DB::table('users')
            ->where([
                'id' => $postulants->id,
            ])
            ->update(['active' => 1]);

        return redirect()->back()->with('success', 'Postulant sélectionné avec succès!');
    }
    public function desactiverfreelancer($id)
    {
        $freelancers = User::findOrFail($id);

        DB::table('users')
            ->where([
                'id' => $freelancers->id,
            ])
            ->update(['active' => 0]);

        return redirect()->back()->with('success', 'Postulant sélectionné avec succès!');
    }
    public function activerfreelancer($id)
    {
        $freelancers = User::findOrFail($id);

        DB::table('users')
            ->where([
                'id' => $freelancers->id,
            ])
            ->update(['active' => 1]);

        return redirect()->back()->with('success', 'Postulant sélectionné avec succès!');
    }


    public function inscriptionadmin(Request $request)
    {


        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->ville = $request->ville;
        $admin->save();

        return redirect()->intended('connexionadmin');
    }
    public function connexionadmin(Request $request)
    {

        $email = $request->email;
        $password = $request->password;

        $admin = Admin::where('email', '=', $email)->first();
        if ($admin && Hash::check($password, $admin->password)) {
            // Mot de passe correct
            return redirect('tableaudebord');
        } else {
            // Mot de passe incorrect
            return redirect()->back()->withErrors(['email' => 'Adresse Email ou Mot de passe incorrect'])->withInput();
        }
    }

    public function adminj()
    {
        //
        $admins= Admin::all();
        return view('Admin.adminj', ['admins' => $admins]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function addadmin(Request $request)
    {
        return view('Admin.addadmin');

        //
    }
    public function getAdminName()
    {
        $adminId = Auth::id();
        $admin = Admin::find($adminId);
        return $admin;
    }
    public function detailrecruteur(String $id)
    {
        $recruteurs = User::find($id);
        return view('Admin.detailrecruteur',compact('recruteurs'));
        //
    }
    public function detailfreelancer(String $id)
    {
        $freelancers = User::find($id);
        return view('Admin.detailfreelancer',compact('freelancers'));
        //
    }

    public function searchrecruteur(Request $request)
{
    $query = User::where('role','=','recruteur')->query();

    // Vérifier si une recherche a été effectuée
    if ($request->has('search')) {
        $search = $request->input('search');
        $query->where(function($query) use ($search) {
            $query->where('name', 'like', "%$search%")
                  ->orWhere('email', 'like', "%$search%");
        });
    }

    $recruteurs = $query->get();
    $count = $recruteurs->count();
    return view('Admin.tableaudebord', compact('recruteurs','count'));
}

}
