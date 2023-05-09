<?php


namespace App\Models;

use App\Models\User;
use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Notifications\ConfirmationNotification;
use App\Notifications\EntretienProgrammeNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Notifications\ProgrammationEntretienNotification;

class Postuler extends Model
{
    protected $table = 'postulers';
    protected $primaryKey = ['id_user', 'id_offre'];
    public $incrementing = false;
    protected $keyType = 'integer';

    use Notifiable;

    protected $fillable = [
        'id_user',
        'id_offre',
        'statut',
        'cv',
        'lettre_motivation',
        'topic',
        'start_time',
        'duration',
        'agenda',
        'timezone',
        'host_video',
        'participant_video',
    ];

    public function offre()
    {
        return $this->belongsTo(Offre::class, 'id_offre');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public static function createEntretien( $data, $id_user, $id_offre)
    {
        $entretien = new Postuler();
        $entretien->topic = $data['topic'];
        $entretien->start_time = $data['start_time'];
        $entretien->duration = $data['duration'];
        $entretien->agenda = $data['agenda'];
        $entretien->timezone = $data['timezone'];
        $entretien->start_url = $data['start_url'];
        $entretien->join_url = $data['join_url'];


        if (isset($data['host_video'])) {
            $host_video = $data['host_video'];
        } else {
            $host_video = null; // ou une valeur par défaut
        }
        if (isset($data['participant_video'])) {
            $participant_video = $data['participant_video'];
        } else {
            $participant_video = null; // ou une valeur par défaut
        }        // Trouver la ligne correspondante dans la table postuler
        $postuler = Postuler::where('id_user', $id_user)
            ->where('id_offre', $id_offre)
            ->first();

        if ($postuler) {
            // Si la ligne existe, récupérer toutes les valeurs existantes
            $dataToUpdate = $postuler->toArray();

            // Mettre à jour les champs nécessaires
            $dataToUpdate['topic'] = $data['topic'];
            $dataToUpdate['start_time'] = $data['start_time'];
            $dataToUpdate['duration'] = $data['duration'];
            $dataToUpdate['agenda'] = $data['agenda'];
            $dataToUpdate['timezone'] = $data['timezone'];
            $dataToUpdate['start_url'] = $data['start_url'];
            $dataToUpdate['join_url'] = $data['join_url'];

            if (isset($data['host_video'])) {
                $dataToUpdate['host_video'] = $data['host_video'];
            }
            if (isset($data['participant_video'])) {
                $dataToUpdate['participant_video'] = $data['participant_video'];
            }
            $dataToUpdate['programmed'] = 1;
       
                // Mettre à jour la ligne dans la table
        Postuler::where('id_user', $id_user)
        ->where('id_offre', $id_offre)
        ->update($dataToUpdate);

        // Récupérer la ligne mise à jour
        $postuler = Postuler::where('id_user', $id_user)
        ->where('id_offre', $id_offre)
        ->first();

        // Envoyer une notification au postulant
        $postuler->notifyPostulant($postuler);
    
                return $postuler;

        } else {
            // Sinon, créer une nouvelle ligne
            $entretien->id_user = $id_user;
            $entretien->id_offre = $id_offre;
            $entretien->host_video = $host_video;
            $entretien->participant_video = $participant_video;
            $entretien->save();

        }
        return $entretien;
    }



    public function notifyPostulant($entretien)
{
    
    $user = $this->user;
    $user->notify(new EntretienProgrammeNotification($entretien));
}

    use SoftDeletes;
}
