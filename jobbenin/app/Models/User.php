<?php



namespace App\Models;

use App\Models\Offre;
use App\Models\Postuler;
use App\Models\Entretien;
use App\Models\ZoomMeeting;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{   
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'confirmation_token',
    ];
    

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function offres()
    {
        return $this->hasMany(Offre::class, 'id_user')->where('role','recruteur');
    }

    public function offresPostulees()
    {
        return $this->belongsToMany(Offre::class, 'postulers')
            ->withPivot('statut');
    }

    public function postulers()
    {
        return $this->hasMany(Postuler::class, 'id_user');
    }

public function offre()
{
    return $this->hasMany(Offre::class, 'id_user');
}
public function entretiens()
{
    return $this->hasMany(Entretien::class,'id_user');
}
public function meetings()
{
    return $this->hasMany(ZoomMeeting::class,'id_user');
}

}
