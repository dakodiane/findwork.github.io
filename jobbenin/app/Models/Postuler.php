<?php

// Modèle Postuler

namespace App\Models;

use App\Models\User;
use App\Models\Offre;
use Illuminate\Database\Eloquent\Model;

class Postuler extends Model
{
    protected $table = 'postulers';

    protected $fillable = [
        'id_user',
        'id_offre',
        'statut',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function offre()
    {
        return $this->belongsTo(Offre::class, 'id_offre');
    }
}
