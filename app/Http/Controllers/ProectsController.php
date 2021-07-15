<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\proect;
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
        $images = DB::table('proect_img')->get();
         
        return view('allproects',[
            'courses'=>$courses,
            'proects'=>$proects,
            'imgs'=>$images
        ]);
        // return $imgs->where('id_proect', 4)->get();
    }
    public function get_proect($id){
        $project = proect::find($id);

        if($project['is_mentor']){
            $show = proect::select('mentors.full_name', 'proects.*')
            ->join('mentors', 'mentors.id', 'proects.id_person')
            ->where('proects.id', $id)
            ->first();
        }elseif ($project['is_programmer']) {
            $show = proect::select('programmer.full_name', 'proects.*')
            ->join('programmer', 'programmer.id', 'proects.id_person')
            ->where('proects.id', $id)
            ->first();
        }else{
            $show = proect::select('students.full_name', 'proects.*')
            ->join('students', 'students.id', 'proects.id_person')
            ->where('proects.id', $id)
            ->first();
        }
        $images = DB::table('proect_img')->get();
        $courses = DB::table('courses')
        ->get([
            'courses.id as id_course',
            'courses.name as course_name'
        ]);

        //  return $show;
        return view('proect',[
            'courses'=>$courses,
            'proect'=>$show,
            'images'=>$images,
            'id'=>$id,
        ]);
    }
}
