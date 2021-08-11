<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;
use Illuminate\Support\Facades\DB;


class MentorController extends Controller
{


    public function get_mentors(){
        $status = 'mentor';
        $mentors = DB::table('mentors')
        ->select([
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

       
        return view('teachers',[
            'mentors'=>$mentors,
            'courses'=>$courses,
            'status'=>$status
        ]);
    }

   
    public function mentor_portfolio($id){

        $status = 'mentor';
        $texnalogies = DB::table('mentors')
        ->join('texnalogies_mentors','mentors.id','=','texnalogies_mentors.id_mentor')
        ->join('texnalogies','texnalogies_mentors.id_texnalogiy','=','texnalogies.id')
        ->where('mentors.id','=',$id)
        ->get([
            'texnalogies.name as tex_name',
            'procent'
        ]);
        $mentor = DB::table('mentors')
        ->where('mentors.id','=',$id)
        ->get([
            'mentors.full_name',
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
            'mentors.birthday as mentor_birth'
        ]);

        //img,full_name,tg.ins,face,course_name,mentor_id||mentors=>
        $mentors = DB::table('mentors')
        ->take(4)
        ->inRandomOrder()
        ->get([
            'full_name',
            'mentors.img as mentor_img',
            'mentors.id as id_mentor',
            'telegram',
            'instagram',
            'facebook',
        ]);

        $courses = DB::table('courses')
        ->get([
            'courses.id as id_course',
            'courses.name as course_name'
        ]);

        return view('portfolio',[
            'texnalogies'=>$texnalogies,
            'mentor'=>$mentor,
            'mentors'=>$mentors,
            'status'=>$status,
            'courses'=>$courses
        ]);
         //return $mentors;
    }




   
}
