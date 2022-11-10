<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_tache',
        'date_debut',
        'date_fin',
        'description',
        'brief_id'
    ];
    // define relationship with brief
    public function brief()
    {
        return $this->belongsTo(Brief::class);
    }
    
}
