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

    public function show($id)
    {
        // 
        $apprenant = Apprenant::find($id);
        return view('apprenant/editApprenant',compact('apprenant'));
    }

    public function edit($id)
    {
        //

        
    }

    public function update(Request $request, $id)
    {
        //
        $apprenant = Apprenant::find($id);
        $apprenant->nom_apprenant = $request->nom_apprenant;
        $apprenant->prenom_apprenant = $request->prenom_apprenant;
        $apprenant->email = $request->email;
        $apprenant->save();
        return redirect('/promotion/edit' . "/" . $apprenant->promotion_id);
        }

    public function destroy($id)
    {
        // delete apprenant
        $apprenant = Apprenant::find($id);
        $apprenant->delete();
        return redirect()->back();

    }




}
