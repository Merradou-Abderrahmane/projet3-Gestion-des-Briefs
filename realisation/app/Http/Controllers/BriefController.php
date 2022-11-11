<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brief;
use App\Models\Tache;
use App\Models\Apprenant;


class BriefController extends Controller
{
    //
    public function index()
    {
        $briefs = Brief::all();
        // compact('briefs') is the same as ['briefs' => $briefs]
        return view('brief/index', compact('briefs'));
    }

    public function create()
    {
        return view('brief/addBrief');
    }

    public function store(Request $request)
    {
        $brief = new Brief();
        $brief->brief_nom = $request->brief_nom;
        $brief->date_livraison = $request->date_livraison;
        $brief->date_recuperation = $request->date_recuperation;
        $brief->save();
        return redirect('index');
    }

    public function edit($id)
    {
        // select * from briefs where id = $id
        $brief = Brief::find($id);
        // send tache to the view as well to display it in the form
        $taches = Tache::where('brief_id', $id)->get();
        return view('brief/editBrief', compact('brief', 'taches'));
        
    }

    public function update(Request $request, $id)
    {
        $brief = Brief::find($id);
        $brief->brief_nom = $request->input('brief_nom');
        $brief->date_livraison = $request->input('date_livraison');
        $brief->date_recuperation = $request->input('date_recuperation');
        $brief->save();
        // $Brief->save();
        return redirect('index');    }

    public function destroy($id)
    {
        $brief = Brief::find($id);
        $brief->delete();
        return redirect('index');
    }

    // display all apprenatns in assgin breif view and comapct brief as well
    public function assign($id)
    {
        $brief = Brief::find($id);
        $apprenants = Apprenant::all();
        return view('brief/assignBrief', compact('brief', 'apprenants'));
    }

    // assign brief to apprenant
}