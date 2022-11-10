<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_apprenant',
        'prenom_apprenant',
        'email',
    ];

    public function briefs()
    {
        return $this->belongsToMany(Brief::class);
    }
    
}
