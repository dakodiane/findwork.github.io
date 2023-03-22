<?php

namespace App\Models;

use App\Models\Offre;
use App\Models\Recruteur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offre extends Model
{
    public function recruteur()
{
    return $this->belongsTo(Recruteur::class, 'id_recruteur');
}
    use HasFactory;
}
