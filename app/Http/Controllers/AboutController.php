<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function about(){

        $courses = DB::table('courses')
        ->join('mentors','courses.id_mentor','=','mentors.id')
        ->take(1)
        ->get([
            'courses.id as id_course',
            'courses.name as course_name',
            'courses.img as course_img',
            'courses.sub_time',
            'courses.days',
            'courses.price',
            'mentors.full_name',
            'mentors.id as id_mentor'
        ]);

        $abouts = DB::table('about')
        ->get();

        return view('about',[
            'courses'=>$courses,
            'abouts'=>$abouts,

        ]);
    }
}
