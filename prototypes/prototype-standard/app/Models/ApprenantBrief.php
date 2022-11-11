<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprenantBrief extends Model
{
    use HasFactory;

    protected $fillable = [
        'apprenant_id',
        'brief_id',
    ];

    protected $table = 'apprenant_brief';
}
