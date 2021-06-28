<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    public function index(){

        $courses = DB::table('courses')
        ->join('mentors','courses.id_mentor','=','mentors.id')
        ->get([
            'courses.id as id_course',
            'mentors.id as id_mentor',
            'courses.name as course_name',
            'description',
            'price',
            'full_name',
            'courses.img as course_img',
            'sub_time',
            'days'
        ]);

        $blogs = DB::table('post')
        ->orderBy('id','desc')
        ->get();

        return view('index',[
            'courses'=>$courses,
            'blogs'=>$blogs
        ]);
        //return $courses;
    }
}
