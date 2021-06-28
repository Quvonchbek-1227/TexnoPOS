<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function course_detail($id){
        
      $course = DB::table('courses')
      ->join('mentors','courses.id_mentor','=','mentors.id')
      ->where('courses.id','=',$id)
      ->get([
          'name',
          'hour',
          'age',
          'sub_time',
          'student_count',
          'id_mentor',
          'courses.img as course_img',
          'description',
          'price',
          'days',
          'full_name'
      ]);




      $courses = DB::table('courses')
      ->join('mentors','courses.id_mentor','=','mentors.id')
      ->get([
          'courses.id as id_course',
          'courses.name as course_name',
          'id_mentor',
          'courses.img as course_img',
          'courses.days',
          'sub_time',
          'price',
          'mentors.full_name'

      ]);

      

      //return $course;

      return view('cours-single',[
          'course'=>$course,
          'courses'=>$courses
      ]);
    }
    
    public function get_courses(){
        

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
