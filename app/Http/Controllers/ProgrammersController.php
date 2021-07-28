<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programmer;
use Illuminate\Support\Facades\DB;



class ProgrammersController extends Controller
{
    public function get_programmers(){
        $status = 'programmer';
        $programmers = DB::table('programmer')
        ->select([
        'programmer.img as mentor_img',
        'instagram',
        'telegram',
        'facebook',
        'programmer.id as id_mentor',
        'full_name',
        ])->paginate(12);

        $courses = DB::table('courses')
        ->get([
            'courses.id as id_course',
            'courses.name as course_name'
        ]);


        return view('teachers',[
            'mentors'=>$programmers,
            'status'=>$status,
            'courses'=>$courses
        ]);

        //return $programmers;

    }
    public function programmer_portfolio($id){
        $status = 'programmer';

        $programmer = DB::table('programmer')
        ->join('texnalogies_programmer','programmer.id','=','texnalogies_programmer.id_programmer')
        ->join('texnalogies','texnalogies_programmer.id_texnalogiy','=','texnalogies.id')
        ->where('programmer.id','=',$id)
        ->get([
            'programmer.full_name',
            'phone',
            'email',
            'about',
            'portfolio_detail',
            'experiense',
            'bitirgen',
            'telegram',
            'instagram',
            'facebook',
            'programmer.img as mentor_img',
            'programmer.birthday as mentor_birth'
        ]);

        $texnalogies = DB::table('programmer')
        ->join('texnalogies_programmer','programmer.id','=','texnalogies_programmer.id_programmer')
        ->join('texnalogies','texnalogies_programmer.id_texnalogiy','=','texnalogies.id')
        ->where('programmer.id','=',$id)
        ->get([
            'texnalogies.name as tex_name',
            'procent'
        ]);

        $programmers = DB::table('programmer')
        ->inRandomOrder()
        ->orderBy('id','desc')
        ->take(4)
        ->get([
            'full_name',
            'programmer.img as mentor_img',
            'programmer.id as id_mentor',
            'telegram',
            'instagram',
            'facebook'
        ]);

        $courses = DB::table('courses')
        ->get([
            'courses.id as id_course',
            'courses.name as course_name'
        ]);

        return view('portfolio',[
            'status'=>$status,
            'mentor'=>$programmer,
            'mentors'=>$programmers,
            'texnalogies'=>$texnalogies,
            'courses'=>$courses
        ]);
        //return $programmers;
        
    }

    

    
    
    

}
