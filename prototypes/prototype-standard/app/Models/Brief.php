<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_brief',
        'date_livraison',
        'date_recuperation',
    ];    
    // define relationship with tache
    public function taches()
    {
        return $this->hasMany(Tache::class);
    }

    // define relationship with apprenant
    
    public function apprenants()
    {
        return $this->belongsToMany(Apprenant::class);
    }
}
