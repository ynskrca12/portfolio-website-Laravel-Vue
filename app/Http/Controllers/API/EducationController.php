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
            'education' => $educations
        ],200);
    }
}
