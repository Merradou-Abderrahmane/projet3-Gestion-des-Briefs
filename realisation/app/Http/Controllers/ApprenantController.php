<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprenant;

class ApprenantController extends Controller
{
    // echo apprenants in apprenantbrief view 
    public function index()
    {
        $apprenants = Apprenant::all();
        return view('apprenantbrief',compact('apprenants'));
    }


}
