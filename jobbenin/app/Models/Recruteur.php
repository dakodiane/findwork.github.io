<?php

namespace App\Models;

use App\Models\Offre;
use App\Models\Recruteur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recruteur extends Model
{//////DJEMI/////
    public function offres()
    {
        return $this->hasMany(Offre::class,'id_recruteur');
    }
    use HasFactory;
}
