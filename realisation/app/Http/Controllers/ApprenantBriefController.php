<?php

namespace App\Http\Controllers;

use App\Models\ApprenantBrief;
use Illuminate\Http\Request;
use App\Models\Brief;

class ApprenantBriefController extends Controller
{
    //
    
    public function assignBrief(Request $request)
    {
        $apprenatBrief = new ApprenantBrief();
        $apprenatBrief->apprenant_id=$request->apprenant_id;
        $apprenatBrief->brief_id=$request->brief_id;
        $apprenatBrief->save();
        return back();
    }

    public function destroy($id)
    {
        $apprenatBrief = ApprenantBrief::find($id);
        $apprenatBrief->delete();
        return back();
    }

    // public function destroy(Request $request, $id)
    // {
    //   $brief_id=  $request->brief_id;
    //     ApprenantBrief::where([
    //         ['apprenant_id',$id],
    //         ['briefs_id',$brief_id]
    //     ])
    //     ->delete();
    //     return back();
    // }


}
