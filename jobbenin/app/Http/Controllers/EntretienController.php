<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Offre;
use App\Models\Postuler;
use App\Models\Entretien;
use App\Models\ZoomMeeting;
use Illuminate\Http\Request;
use App\Traits\ZoomMeetingTrait;
use Illuminate\Support\Facades\Auth;

class EntretienController extends Controller
{
    use ZoomMeetingTrait;

    const MEETING_TYPE_INSTANT = 1;
    const MEETING_TYPE_SCHEDULE = 2;
    const MEETING_TYPE_RECURRING = 3;
    const MEETING_TYPE_FIXED_RECURRING_FIXED = 8;

    public function show($id)
    {
        $meeting = $this->get($id);

        return view('programmer', compact('meeting'));
    }


    public function store(Request $request,$id_user,$id_offre)
    {
        $data = $request->all();
        $postulantoffre = Offre::find($id_offre);
        $postulantid = User::find($id_user);
        $entretien = $this->create($data,$id_user, $id_offre);
        
        Postuler::createEntretien($entretien['data'], $id_user, $id_offre);

        return redirect()->back();
    }




    public function update($meeting, Request $request)
    {
        $this->update($meeting->zoom_meeting_id, $request->all());

        return redirect()->route('meetings.index');
    }

    public function destroy(ZoomMeeting $meeting)
    {
        $this->delete($meeting->id);

        return $this->sendSuccess('Meeting deleted successfully.');
    }
    public function index($id,$offreid)
    {
        
        {
            $user = auth()->user();
            if ($user->role == 'recruteur') {
                $offres = $user->offre;
                $postuler = null;
                
                // On récupère le postulant si les identifiants de l'utilisateur et de l'offre sont valides
                $postuler = Postuler::with('user')
                    ->where('id_user', $id)
                    ->where('id_offre', $offreid)
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
                                $id = $postuler->id_user;
                                $offreid = $postuler->id_offre;
                                dd($id);
                            }
                        }
                    }
                    return view('programmer', ['user' => $user,  'offreid' => $offreid, 'id' => $id,'offreid'=>$offreid]);

            } 
         }
        }
        }

        
  


}