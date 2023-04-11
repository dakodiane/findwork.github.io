<?php

// Modèle Offre

namespace App\Models;

use App\Models\User;
use App\Models\Postuler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offre extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'role',
        'id_user',
        'statut',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function postulants()
    {
        return $this->belongsToMany(User::class, 'postulers', 'id_offre', 'id_user')
            ->withPivot('statut');
    }
    public function postulers()
{
    return $this->hasMany(Postuler::class,'id_offre');
}

}
