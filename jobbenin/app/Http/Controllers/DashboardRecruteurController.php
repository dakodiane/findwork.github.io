<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Postuler;
use App\Models\Postulant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardRecruteurController extends Controller
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
        // Récupérez les informations du recruteur connecté à partir de la table users
        $user = DB::table('users')->where('id', Auth::id())->first();

        // Récupérez les offres du recruteur à partir de la table offres
        $offres = DB::table('offres')->where('id_user', Auth::id())->get();


        // Passez les informations du recruteur et ses offres à la vue du tableau de bord
        return view('dashboardrecruteur')->with(['user' => $user, 'offres' => $offres]);
    }
    public function brouillon()
    {
        //

        $user = Auth::user();

        if (!$user) {
            return redirect()->intended('connexion');
        }
        // Récupérez les informations du recruteur connecté à partir de la table users
        $recruteur = DB::table('users')->where('id', Auth::id())->first();

        // Récupérez les offres du recruteur à partir de la table offres
        $offres = DB::table('offres')->where('id_user', Auth::id())->get();


        // Passez les informations du recruteur et ses offres à la vue du tableau de bord
        return view('brouillon')->with(['user' => $user, 'offres' => $offres]);
    }

    public function attentecv(Request $request)
    {
        
        $user = auth()->user();
        if ($user->role == 'recruteur') {
            $offres = $user->offre;
            $data = [];
            $postulantid = []; // Initialisation du tableau des IDs des postulants sélectionnés
            $postulantoffre = []; // Initialisation du tableau des IDs des offres sélectionnés

            foreach ($offres as $offre) {
                foreach ($offre->postulers as $postul) {
                    if ($postul && $postul->user && $postul->suppression == 1 && $postul->selection == 0 && $postul->postulantvisible == 1) {
                        $data[] = [
                            'id_user' => $postul->id_user,
                            'id_offre' => $postul->id_offre,
                            'nom_recruteur' => $user->name,
                            'nom_postulant' => $postul->user->name,
                            'cv' => $postul->cv,
                            'poste' => $offre->poste,
                        ];
                        $postulantid[] = $postul->user->id; // Ajout de l'ID du postulant sélectionné dans le tableau
                        $postulantoffre[] = $postul->id_offre; // Ajout de l'offre dans le tableau

                        // Stockage des valeurs de id_user et id_offre
                        $id_user = $postul->id_user;
                        $id_offre = $postul->id_offre;
                    }
                }
            }
        
            return view('attentecv',
             ['data' => $data, 'user' => $user,'postulantoffre' =>
              $postulantoffre, 'postulantid' => $postulantid,'id_user' => $id_user ?? null, 'id_offre' => $id_offre ?? null]);
        }
        
    }


    public function selectioncv()
    {
        $user = auth()->user();
        if ($user->role == 'recruteur') {
            $offres = $user->offre;
            $data = [];
            $postulantid = []; // Initialisation du tableau des IDs des postulants sélectionnés
        
            foreach ($offres as $offre) {
                foreach ($offre->postulers as $postulant) {
                    if ($postulant && $postulant->user && $postulant->suppression == 0 && $postulant->selection == 1) {
                        $data[] = [
                            'id_user' => $postulant->id_user,
                            'id_offre' => $postulant->id_offre,
                            'nom_recruteur' => $user->name,
                            'nom_postulant' => $postulant->user->name,
                            'cv' => $postulant->cv,
                            'poste' => $offre->poste,
                        ];
                        $postulantid[] = $postulant->user->id; // Ajout de l'ID du postulant sélectionné dans le tableau
                    }
                }
            }
            $success = session()->get('success');
            $id_user = isset($postulant) ? $postulant->id_user : null;
            $id_offre = isset($postulant) ? $postulant->id_offre : null;
        
            return view('selectioncv', ['data' => $data, 'user' => $user, 'postulantid' => $postulantid, 'id_user' => $id_user, 'id_offre' => $id_offre, 'success' => $success]);
        }
        
    }
    
    public function selectionner(Request $request, $id_user, $id_offre)
    {
        $user = auth()->user();
     
        $postuler = Postuler::where('id_user', $id_user)->where('id_offre', $id_offre)->first();
    
        if ($postuler) {
            DB::table('postulers')
                ->where('id_user', $postuler->id_user)
                ->where('id_offre', $postuler->id_offre)
                ->update(['suppression' => 0, 'selection' => 1]);
    
            return redirect()->route('attentecv')->with('success', 'Postulant sélectionné avec succès!');
    
        } else {
            return redirect()->back()->with('error', 'Postulant introuvable!');
        }
    }
    

    
    public function supprimerpostulant($id_user, $id_offre)
    {
        $postuler = Postuler::where('id_user', $id_user)->where('id_offre', $id_offre)->first();

        DB::table('postulers')
            ->where([
                'id_user' => $postuler->id_user,
                'id_offre' => $postuler->id_offre,
            ])
            ->update(['postulantvisible' => 0]);

            return redirect()->route('attentecv', ['id_user' => $id_user, 'id_offre' => $id_offre])->with('success', 'Postulant sélectionné avec succès!');

    }

     


    
public function showd(Request $request, $id_user, $id_offre)
    {
        $user = auth()->user();
        if ($user->role == 'recruteur') {
            $offres = $user->offre;
            $postuler = null;
            
            // On récupère le postulant si les identifiants de l'utilisateur et de l'offre sont valides
            $postuler = Postuler::with('user')
                ->where('id_user', $id_user)
                ->where('id_offre', $id_offre)
                ->first();
            
            // On vérifie que le postulant a bien été récupéré avant d'essayer d'accéder à ses propriétés
            if ($postuler) {
                $poste = $postuler->offre->poste;
                $lettreMotivation = $postuler->lettre_motivation;
                $cv = $postuler->cv;
                $data = [];
            
                $postulantid = null;
                $postulantoffre = null;
                
                foreach ($offres as $offre) {
                    foreach ($offre->postulers as $postul) {
                        if ($postul && $postul->user && $postul->suppression == 1 && $postul->selection == 0 && $postul->postulantvisible == 1) {
                            $data[] = [
                                'id_user' => $postul->id_user,
                                'id_offre' => $postul->id_offre,
                                'nom_recruteur' => $user->name,
                                'nom_postulant' => $postul->user->name,
                                'poste' => $offre->poste,
                            ];
                
                            // Stockage des valeurs de id_user et id_offre
                            $postulantid = $postuler->id_user;
                            $postulantoffre = $postuler->id_offre;
                        }
                    }
                }
                
                return view('detailpostulant', [
                    'postulant' => $postuler->user,
                    'cv'=> $cv,
                    'lettreMotivation' => $lettreMotivation,
                    'poste' => $poste,
                    'data' => $data,
                    'user' => $user,
                   
                    'postulantoffre' => $postulantoffre,
                    'postulantid' => $postulantid,
                    'id_user' => $id_user ?? null,
                    'id_offre' => $id_offre ?? null
                ]);
            } else {
                return redirect()->back()->with('error', 'Postulant non trouvé.');
            }
        }  
    }
    
    
    
        public function annonce()
   
   
   
   
        {
        
        
        
        
        
        
        //

        $user = Auth::user();

        if (!$user) {
            return redirect()->intended('connexion');
        }
        // Récupérez les informations du recruteur connecté à partir de la table users
        $recruteur = DB::table('users')->where('id', Auth::id())->first();

        // Récupérez les offres du recruteur à partir de la table offres
        $offres = DB::table('offres')->where('id_user', Auth::id())->get();


        // Passez les informations du recruteur et ses offres à la vue du tableau de bord
        return view('annonce')->with(['user' => $user, 'offres' => $offres]);
    
    
    
    }
    public function entretien()
    {
        //

        $user = Auth::user();

        if (!$user) {
            return redirect()->intended('connexion');
        }
        // Récupérez les informations du recruteur connecté à partir de la table users
        $recruteur = DB::table('users')->where('id', Auth::id())->first();

        // Récupérez les offres du recruteur à partir de la table offres
        $offres = DB::table('offres')->where('id_user', Auth::id())->get();


        // Passez les informations du recruteur et ses offres à la vue du tableau de bord
        return view('entretien')->with(['user' => $user, 'offres' => $offres]);
    }


    public function publicite()
    {
        //

        $user = Auth::user();

        if (!$user) {
            return redirect()->intended('connexion');
        }
        // Récupérez les informations du recruteur connecté à partir de la table users
        $recruteur = DB::table('users')->where('id', Auth::id())->first();

        // Récupérez les offres du recruteur à partir de la table offres
        $offres = DB::table('offres')->where('id_user', Auth::id())->get();


        // Passez les informations du recruteur et ses offres à la vue du tableau de bord
        return view('publicite')->with(['user' => $user, 'offres' => $offres]);
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
    public function upload(Request $request)
    {
        // Vérifiez si le fichier a été soumis
        if ($request->hasFile('logo_entreprise')) {
            
            $file = $request->file('logo_entreprise');
            
            // Validez que le fichier est une image
            $validImage = $file->isValid() && in_array($file->getMimeType(), ['image/jpeg', 'image/png', 'image/gif']);
            
            if ($validImage) {
                // Générez un nom unique pour le fichier
                $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
                
                // Stockez le fichier dans le dossier de destination
                $file->storeAs('public/photoslogo', $fileName);
                
                // Mettez à jour l'objet utilisateur avec le nom du fichier
                $user = Auth::user();
                $user->logo_entreprise = $fileName;
                $user->save();
                
                return redirect()->back()->with('success', 'Le fichier a été téléchargé avec succès!');
            } else {
                return redirect()->back()->with('error', 'Le fichier doit être une image (JPG, PNG ou GIF).');
            }
        } else {
            return redirect()->back()->with('error', 'Le fichier est manquant.');
        }
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
    
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->villeR = $request->input('villeR');
        $user->description_recruteur = $request->input('description_recruteur');
       
    
        // Télécharger et enregistrer la photo si elle a été envoyée
        if ($request->hasFile('logo_entreprise')) {
            $photo = $request->file('logo_entreprise');
            $filename = time() . '.' . $photo->getClientOriginalExtension();
            $path = $photo->storeAs('public/photoslogo', $filename);
            $user->logo_entreprise = $filename;
        }
    
        $user->save();
    
        return redirect()->route('profilrecruteur', $user->id)
            ->with('success', 'Profil mis à jour avec succès.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
    











    }
    
    
    


