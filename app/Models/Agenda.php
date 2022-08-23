<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'medecinsId',
        'date_agenda',
        'heure',
        
    ];
    public function users()
    {
        return $this->BelongsTo(User::class,'userId');
    }
}
