<?php

namespace App\Models;

use App\Models\User;
use App\Models\beneficiers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class beneficiers extends Model
{public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    
    use HasFactory;
}
