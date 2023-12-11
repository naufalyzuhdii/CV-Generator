<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkillController extends Controller
{
    public function store(Request $request,$id){
        $request = $request->all();
        $cv = Cv::where('id','=',$id)->first();
        // DD($request);
        $skill = new Skill();
        $skill->cv_id = $cv->id;
        $skill->skill_name = $request['skill_name'];
        $skill->type = $request['skill_type'];
        $skill->description = $request['skill_description'];
        $skill->skill_level = $request['skill_level'];

        $skill->save();
        return view('createcv')->with(compact('cv'));
    }

    public function update(Request $request,$id){

        $skill = Skill::findOrFail($id);
        $skill->skill_name = $request->skill_name;
        $skill->type = $request->type;
        $skill->description = $request->description;
        $skill->skill_level = $request->skill_level;

        $skill->save();

        $cv = Cv::findOrFail($skill->cv_id);

        return view('createcv')->with(compact('cv'));
    }
}
