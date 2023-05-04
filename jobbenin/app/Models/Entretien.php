<?php
namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Entretien extends Model
{
    protected $fillable = ['id_user', 'topic', 'start_time', 'duration', 'agenda', 'timezone'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function entretiens()
    {    return $this->belongsTo(Entretien::class, 'id');
    
    }




}