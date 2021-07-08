<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProectsController extends Controller
{
    public function allproects(){

        $courses = DB::table('courses')
        ->get([
            'courses.id as id_course',
            'courses.name as course_name'
        ]);
        return view('allportfolio',[
            'courses'=>$courses
        ]);
    }
}
