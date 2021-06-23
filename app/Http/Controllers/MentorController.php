<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;
use Illuminate\Support\Facades\DB;


class MentorController extends Controller
{


    public function get_mentors(){
        $mentors = DB::table('mentors')
        ->join('courses','mentors.id_course','=','courses.id')
        ->select([
            'courses.name as course_name',
            'courses.id as id_course',
            'mentors.id as id_mentor',
            'mentors.img as mentor_img',
            'mentors.full_name',
            'mentors.telegram',
            'mentors.instagram',
            'mentors.facebook',
        ])->paginate(12);

        $courses = DB::table('courses')
        ->get([
            'courses.id as id_course',
            'courses.name as course_name'
        ]);

       // return $courses;
        return view('teachers',[
            'mentors'=>$mentors,
            'courses'=>$courses
            
        ]);
    }

    public function mentor_portfolio($id){
        $texnalogies = DB::table('mentors')
        ->join('texnalogies_mentors','mentors.id','=','texnalogies_mentors.id_mentor')
        ->join('texnalogies','texnalogies_mentors.id_texnalogiy','=','texnalogies.id')
        ->where('mentors.id','=',$id)
        ->get([
            'texnalogies.name as tex_name',
            'procent'
        ]);
        $mentors = DB::table('mentors')
        ->join('courses','mentors.id_course','=','courses.id')
        ->where('mentors.id','=',$id)
        ->get([
            'full_name',
            'phone',
            'email',
            'about',
            'portfolio_detail',
            'experiense',
            'bitirgen',
            'telegram',
            'instagram',
            'facebook',
            'mentors.img as mentor_img',
            'courses.name as course_name',
            'mentors.birthday as mentor_birth'
        ]);
        return $mentors;
    }
}
