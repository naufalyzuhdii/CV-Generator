<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use PDF;
class CvController extends Controller
{
     public function store(){
        $user_id = Auth::user()->id;
        $cv = new Cv();
        $cv->user_id = $user_id;
        $cv->summary = 'Insert Your Summary Here';
        $cv->save();
        return view('createcv')->with(compact('cv'));
     }

     public function editSummary(){

     }


     public function makePDF(Request $id){
        
        $user = Auth::user();
       
        $cv ->cv();
        $pdf = PDF::loadView('createcv',['cv'=>$cv]);
        
        return $pdf->download('CV');
     }
}
