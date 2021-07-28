<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  



class EventController extends Controller
{
    public function get_events(){
        $courses = DB::table('courses')
        ->get([
            'courses.id as id_course',
            'courses.name as course_name'
        ]);

        $events = DB::table('event')
        ->join('mentors','event.mentor_id','=','mentors.id')
        ->select([
            'date',
            'time',
            'price',
            'event.id as id_event',
            'full_name',
            'adress',
            'title',
            'full_name'
        ])
        ->paginate(10);

        return view('events',[
            'courses'=>$courses,
            'events'=>$events
        ]);

    }
    public function event($id){

        $courses = DB::table('courses')
        ->get([
            'courses.id as id_course',
            'courses.name as course_name'
        ]);

        $event = DB::table('event')
        ->join('mentors','event.mentor_id','=','mentors.id')
        ->where('event.id','=',$id)
        ->get([
            'event.date',
            'price',
            'adress',
            'mentor_id',
            'title',
            'time',
            'text',
            'event.img as event_img',
            'full_name'
        ]);

        return view('event-single',[
            'courses'=>$courses,
            'event'=>$event
        ]);

        //return $event;
    }






   

}
