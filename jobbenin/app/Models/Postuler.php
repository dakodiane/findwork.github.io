<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Postuler extends Model
{
    public function offre()
    {
        return $this->belongsTo(Offre::class, 'id_offre');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    use SoftDeletes;


}
