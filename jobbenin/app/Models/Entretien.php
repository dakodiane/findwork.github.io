<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entretien extends Model
{
    protected $fillable = ['id_user', 'topic', 'start_time', 'duration', 'agenda', 'timezone'];

public function users()
{
    return $this->belongsToMany(User::class);
}
public static function createEntretien($data)
{
    $entretien = new Entretien();
    $entretien->topic = $data['topic'];
    $entretien->start_time = $data['start_time'];
    $entretien->duration = $data['duration'];
    $entretien->agenda = $data['agenda'];
    $entretien->timezone = $data['timezone'];
    $entretien->host_video = $data['host_video'];
    $entretien->participant_video = $data['participant_video'];
    $entretien->id_user = auth()->user()->id; // ou $data['recruteur_id'] si le champ existe dans le formulaire
    $entretien->save();

    return $entretien;
}
public function entretiens()
{    return $this->belongsTo(User::class, 'id_user');

}


}