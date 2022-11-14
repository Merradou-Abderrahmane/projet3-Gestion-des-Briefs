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

    // create new apprenant

    public function create($id)
    {
        return view('apprenant/addApprenant' , compact('id'));
    }

    public function store(Request $request)
    {
        $apprenant = new Apprenant();
        $apprenant->nom_apprenant = $request->nom_apprenant;
        $apprenant->prenom_apprenant = $request->prenom_apprenant;
        $apprenant->email = $request->email;
        // promotion id
        $apprenant->promotion_id = $request->promotion_id;
        $apprenant->save();

        return redirect()->action([PromotionController::class, 'show'], ['id' => $request->promotion_id]);
        // return redirect()->route('promotion.edit',$request->promotion_id);
     }



}
