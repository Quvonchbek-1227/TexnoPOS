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
        ->paginate(16);
        
        return view('courses',[
            'courses'=>$courses
        ]);
        //return $courses;
    }
    // public function index(){
    //     $courses = DB::table('courses')
    //     ->select('courses.*', 'mentors.*', 'mentors.id as mentor_id', 'courses.id as course_id')
    //     ->join('mentors', 'mentors.id', '=', 'courses.id_mentor')
    //     ->get();
    //     //return dd($courses);
    //     return view('admin.datas.courses', ['courses' => $courses]);   
    // }
    // public function destroy($id){
    //     $deleted = DB::table('courses')->where('id', $id)->delete();
    //     if($deleted){
    //         return back();
    //     }
    // }
    // public function create(){
    //     $mentors = DB::table('mentors')->get();
    //     return view('admin.add.addcourse', ['mentors' => $mentors]);
    // }

    // public function store(Request $request){
    //     $name = $request->name;
    //     $hour = $request->hour;
    //     $age = $request->age;
    //     $sub_time = $request->sub_time;
    //     $student_count = $request->student_count;
    //     $id_mentor = $request->id_mentor;
    //     $img = $request->img;
    //     $price = $request->price;
    //     $days = $request->days;
    //     $file1 = $request->file1;
    //     $file2 = $request->file2;
    //     $file3 = $request->file3;
    //     $description = $request->description;
    //     if(empty($file1)){
    //         $file1 = "file1";
    //     }if(empty($file2)){
    //         $file2 = "file1";
    //     }
    //     if(empty($file3)){
    //         $file3 = "file1";
    //     }
    //     if(empty($img)){
    //         $img = "img";
    //     }
        
        
    //     $created = DB::table('courses')->insert([
    //         'name' => $name,
    //         'hour' => $hour,
    //         'age' => $age,
    //         'sub_time' => $sub_time,
    //         'student_count' => $student_count,
    //         'id_mentor' => $id_mentor,
    //         'price' => $price,
    //         'days' => $days,
    //         'file1' => $file1,
    //         'file2' => $file2,
    //         'file3' => $file3,
    //         'img' => $img,
    //         'description' => $description   
    //     ]);
    //     if($created){
    //         return redirect('admincourse');
    //     }
        
    // }


    // public function show($id){
        
    // }
    // public function edit($id){
    //     $data = DB::table('courses')->where('id', $id)->get();
    //     return view('admin.add.addcourse', ['data' => $data]);
    // }

}
