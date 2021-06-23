<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function course_detail($id){
        
      $course = Course::all()->where('id','=',$id);

      return $course;
    }
    
    public function get_courses(){
        // img,name,id_course,id_mentor,days,sub_time,price,full_name

        $courses = DB::table('courses')
        ->join('mentors','courses.id_mentor','=','mentors.id')
        ->select([
            'courses.id as id_course',
            'mentors.id as id_mentor',
            'courses.name as course_name',
            'price',
            'full_name',
            'courses.img as course_img',
            'sub_time',
            'days'
        ])
        ->paginate(4);
        
        return view('courses',[
            'courses'=>$courses
        ]);
        //return $courses;
    }
}
