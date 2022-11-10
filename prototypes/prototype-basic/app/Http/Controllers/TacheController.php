<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tache;

class TacheController extends Controller
{
    //
    public function index()
    {
        $taches = Tache::all();
        // compact('Tache') is the same as ['taches' => $taches]
        return view('index', ['taches' => $taches]);
    }

    public function create()
    {
        return view('addTache');
    }

    public function store(Request $request)
    {
        $tache = new Tache();
        $tache->tacheName = $request->tacheName;
        $tache->save();
        // return redirect('/');
        return redirect('index');
    }

    public function edit($id)
    {
        $tache = Tache::find($id);
        // return Tache::find($id);
        return view('editTache', ['tache' => $tache] );
    }

    public function update(Request $request, $id)
    {
        $tache = Tache::find($id);
        $tache->tacheName = $request->input('tacheName');
        $tache->update();
        // $Tache->save();
        return redirect('index');
    }

    public function destroy($id)
    {
        $tache = Tache::find($id);
        $tache->delete();
        return redirect('index');
    }

}
