<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProectsController extends Controller
{
    public function allproects(){

        $courses = DB::table('courses')
        ->get([
            'courses.id as id_course',
            'courses.name as course_name'
        ]);

        $proects = DB::table('proects')->get();
        $imgs = DB::table('proect_img')->get();
         
        return view('allportfolio',[
            'courses'=>$courses,
            'proects'=>$proects,
            'imgs'=>$imgs
        ]);
        // return $imgs->where('id_proect', 4)->get();
    }
    public function get_proect($id){
        $students = DB::table('proects')
        ->where('is_student','true')->get();
        $programmers = DB::table('proects')
        ->where('is_programmer','true')->get();
        $mentors = DB::table('proects')
        ->where('is_mentor','true')->get();

        $proect = DB::table('proects')
        ->join('students',function($join){
            $join->where([
                ['proects.is_student','=','true'],
                ['students.id','=','proects.id_person'],
            ]);
        })->where('proects.id',$id)
        ->get();
       

        return $proect;
    }
}
