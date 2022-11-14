<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    
    protected $table = 'promotions';
    // define the relationship with Apprenant
    public function apprenants()
    {
        return $this->hasMany(Apprenant::class);
    }
    
    protected $fillable = ['nom_promotion'];
}
