<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tache;

class TacheController extends Controller
{
    //
    public function create($id)
    {
        return view('tache.addTache', ['id' => $id]);
    }

    public function store(Request $request)
    {
        
        $tache = new Tache([
            'nom_tache' => $request->input('nom_tache'),
            'date_debut' => $request->input('date_debut'),
            'date_fin' => $request->input('date_fin'),
            'description' => $request->input('description'),
            'brief_id' => $request->input('id')

        ]);
        $tache->save();
        return redirect('/edit' . "/" . $request->id);
    }

    public function edit($id)
    {
        $tache = Tache::find($id);
        return view('tache.editTache', ['tache' => $tache]);
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        // ]);
        $tache = Tache::find($id);
        $tache->nom_tache = $request->get('nom_tache');
        $tache->date_debut = $request->get('date_debut');
        $tache->date_fin = $request->get('date_fin');
        $tache->description = $request->get('description');
        
        $tache->save();

        return redirect('/edit' . "/" . $tache->brief_id);
    }

    public function destroy($id)
    {
        $tache = Tache::find($id);
        $tache->delete();
        // redirect back to the same page
        return redirect()->back();
    }

    public function search(Request $request)
    {
    if($request->ajax()){
        $input = $request->key;
    $output="";
    $tache=Tache::where('firstName','like','%'.$input."%")
        // ->orWhere('lastName','like','%'.$input."%")
        // ->orWhere('email','like','%'.$input."%")
    ->get();
    // if($promotion)
    {
    foreach ($tache as $tache) {
    $output.='<tr>
    <td>'.$tache->firstName.'</td>
    <td>
    <a href="/tache/edit/'.$tache->id.'" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
    <a href="/tache/delete/'.$tache->id.'" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
    <td>
    </tr>';
    }
    return Response($output);
       }
       }
    }

}
