<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brief;

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
        $brief->save();
        return redirect('index');
    }

    public function edit($id)
    {
        $brief = Brief::find($id);
        $taches = $brief->taches;
        // return Brief::find($id);
                                     #compact('Brief')
        return view('brief/editBrief', compact('brief', 'taches', 'id') );
    }

    public function update(Request $request, $id)
    {
        $brief = Brief::find($id);
        $brief->brief_nom = $request->input('brief_nom');
        $brief->update();
        // $Brief->save();
        return redirect('index');    }

    public function destroy($id)
    {
        $brief = Brief::find($id);
        $brief->delete();
        return redirect('index');
    }
}

