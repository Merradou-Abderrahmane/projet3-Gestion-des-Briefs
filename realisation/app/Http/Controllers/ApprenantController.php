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

    public function store(Request $request)
    {
        $apprenant = new Apprenant();
        $apprenant->nom_apprenant = $request->nom_apprenant;
        $apprenant->prenom_apprenant = $request->prenom_apprenant;
        $apprenant->email = $request->email;
        $apprenant->save();
        return redirect()->back();
    }



}
