<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;


class PromotionController extends Controller
{
    //

    public function index()
    {
        $promotions = Promotion::all();
        return view('promotion/promotion',compact('promotions'));
    }

    public function create()
    {
        return view('/promotion/addPromotion');
    }

    public function store(Request $request)
    {
        $promotion = new Promotion();
        $promotion->nom_promotion = $request->nom_promotion;
        $promotion->save();
        return redirect('/promotion');
    }

    public function show($id)
    {
        // get apprentant that belongs to this promotion
        $apprenants = Promotion::find($id)->apprenants;
        $promotion = Promotion::find($id);
        return view('promotion/editPromotion',compact('promotion' , 'apprenants'));
    }

    public function update(Request $request, $id)
    {
        $promotion = Promotion::find($id);
        $promotion->nom_promotion = $request->nom_promotion;
        $promotion->save();
        return redirect('/promotion');
    }

    public function destroy($id)
    {
        $promotion = Promotion::find($id);
        $promotion->delete();
        return redirect()->back();
    }

}
