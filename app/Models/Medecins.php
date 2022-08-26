<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecins extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'sexe',
        'specialite',
        'email',
        'telephone',
        'password',
        'userId',
    ];
    public function users()
    {
        return $this->BelongsTo(User::class,'userId');
    }
}
