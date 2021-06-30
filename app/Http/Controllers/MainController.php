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
        ->take(1)
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
        ->take(3)
        ->get();

        $events = DB::table('event')
        ->take(3)
        ->join('mentors','event.mentor_id','=','mentors.id')
        ->get([
            'event.date',
            'time',
            'text',
            'title',
            'adress',
            'mentor_id',
            'full_name',
            'price'
        ]);

        return view('index',[
            'courses'=>$courses,
            'blogs'=>$blogs,
            'events'=>$events
        ]);
        //return $events;
    }
}
