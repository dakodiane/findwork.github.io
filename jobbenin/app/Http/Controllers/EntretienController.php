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
        $offre = Offre::find($id_offre);
        $postulant = User::find($id_user);
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
        $user = auth()->user();
        if ($user->role == 'recruteur') {
            $offres = $user->offre;
            $data = [];
            $postulantid = []; // Initialisation du tableau des IDs des postulants sélectionnés
            $offreid = [];
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
                        $postulantid = $postulant->user->id; 
                        $offreid=$postulant->id_offre;
                        // Ajout de l'ID du postulant sélectionné dans le tableau
                    }
                }
            }
            $success = session()->get('success');
            $id_user = isset($postulant) ? $postulant->id_user : null;
            $id_offre = isset($postulant) ? $postulant->id_offre : null;
            return view('programmer', ['user' => $user, 'postulantid' => $postulantid,'offreid'=>$offreid]);
        }
    }

    public function startMeeting($id)
    {
        $meeting = ZoomMeeting::findOrFail($id);

        if ($meeting->type != self::MEETING_TYPE_SCHEDULE) {
            return $this->sendError('Meeting type should be schedule to start the meeting');
        }

        $this->start($meeting->id);

        return $this->sendSuccess('Meeting started successfully');
    }

 
    

}
