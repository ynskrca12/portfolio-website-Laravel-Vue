<?php

namespace App\Http\Controllers\API;

use App\Models\Education;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class EducationController extends Controller
{
    public function get_all_education(){

        $educations = Education::orderBy('id','DESC')->get();

        return response()->json([
            'educations' => $educations
        ],200);
    }

    public function create_education(Request $request){
        $this->validate($request,[
            'institution' => 'required'
        ]);
        $education = new Education();
        $education->institution = $request->institution;
        $education->period = $request->period;
        $education->degree = $request->degree;
        $education->department = $request->department;
        $education->save();
    }
}
