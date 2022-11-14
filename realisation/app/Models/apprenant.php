<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_apprenant',
        'prenom_apprenant',
        'email',
    ];

    // define the relationship with Promotion

    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }

    public function briefs()
    {
        return $this->belongsToMany(Brief::class);
    }
    
}
