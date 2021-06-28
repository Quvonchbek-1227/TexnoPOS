<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{   
 
    public function get_students(){

        $status = 'student';
        $students = DB::table('students')
        ->join('courses','students.id_course','=','courses.id')
        ->select([
            'courses.name as course_name',
            'courses.id as id_course',
            'students.id as id_mentor',
            'students.img as mentor_img',
            'students.full_name',
            'students.telegram',
            'students.instagram',
            'students.facebook',
        ])
        ->paginate(12);

        $courses = DB::table('courses')
        ->get([
            'courses.id as id_course',
            'courses.name as course_name'
        ]);

        return view('teachers',[
            'mentors'=>$students,
            'courses'=>$courses,
            'status'=>$status     
        ]);

        //return $students;
    }
    public function student_portfolio($id){

        $status = 'student';

        $texnalogies = DB::table('students')
        ->join('texnalogies_student','students.id','=','texnalogies_student.id_student')
        ->join('texnalogies','texnalogies_student.id_texnalogiy','=','texnalogies.id')
        ->where('students.id','=',$id)
        ->get([
            'texnalogies.name as tex_name',
            'procent'
        ]);

        $student = DB::table('students')
        ->join('courses','students.id_course','=','courses.id')
        ->where('students.id','=',$id)
        ->get([
            'students.full_name',
            'phone',
            'email',
            'about',
            'portfolio_detail',
            'experiense',
            'bitirgen',
            'telegram',
            'instagram',
            'facebook',
            'students.img as mentor_img',
            'courses.name as course_name',
            'students.birthday as mentor_birth'
        ]);

        //img,full_name,tg.ins,face,course_name,mentor_id||mentors=>
        $students = DB::table('students')
        ->join('courses','students.id_course','=','courses.id')
        ->take(4)
        ->inRandomOrder()
        ->get([
            'full_name',
            'students.img as mentor_img',
            'courses.name as course_name',
            'students.id as id_mentor',
            'telegram',
            'instagram',
            'facebook',
            'courses.id as id_course'
        ]);

        $courses = DB::table('courses')
        ->get([
            'courses.id as id_course',
            'courses.name as course_name'
        ]);

        return view('portfolio',[
            'texnalogies'=>$texnalogies,
            'mentor'=>$student,
            'mentors'=>$students,
            'status'=>$status,
            'courses'=>$courses
        ]);
        //return $courses;

    }
}
