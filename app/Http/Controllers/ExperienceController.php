<?php

namespace App\Http\Controllers;
use App\Models\Cv;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExperienceController extends Controller
{
    //
    public function store(Request $request,$id){
        $request = $request->all();
        $cv = Cv::where('id','=',$id)->first();

        $exp = new Experience();
        $exp->cv_id = $cv->id;
        $exp->org_name = $request['org_name'];
        $exp->type = $request['type'];
        $exp->description = $request['description'];
        $exp->start_date = $request['start_date'];
        $exp->end_date = $request['end_date'];
        $exp->link = $request['link'];

        $exp->save();
        return view('createcv')->with(compact('cv'));
    }

    public function update(Request $request,$id){

        $exp = Experience::findOrFail($id);
        $exp->org_name = $request['org_name'];
        $exp->type = $request['type'];
        $exp->description = $request['description'];
        $exp->start_date = $request['start_date'];
        $exp->end_date = $request['end_date'];
        $exp->link = $request['link'];

        $exp->save();

        $cv = CV::findOrFail($exp->cv_id);

        return view('createcv')->with(compact('cv'));
    }
}
