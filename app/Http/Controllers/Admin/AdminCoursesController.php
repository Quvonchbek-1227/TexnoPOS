<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = DB::table('courses')
        ->select('courses.*', 'mentors.*', 'mentors.id as mentor_id', 'courses.id as course_id')
        ->join('mentors', 'mentors.id', '=', 'courses.id_mentor')
        ->get();
        //return dd($courses);
        return view('admin.datas.courses', ['courses' => $courses]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mentors = DB::table('mentors')->get();
        return view('admin.add.addcourse', ['mentors' => $mentors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $hour = $request->hour;
        $age = $request->age;
        $sub_time = $request->sub_time;
        $student_count = $request->student_count;
        $id_mentor = $request->id_mentor;
        $img = $request->img;
        $price = $request->price;
        $days = $request->days;
        $file1 = $request->file1;
        $file2 = $request->file2;
        $file3 = $request->file3;
        $description = $request->description;
        if(empty($file1)){
            $file1 = "file1";
        }if(empty($file2)){
            $file2 = "file1";
        }
        if(empty($file3)){
            $file3 = "file1";
        }
        if(empty($img)){
            $img = "img";
        }
        
        
        $created = DB::table('courses')->insert([
            'name' => $name,
            'hour' => $hour,
            'age' => $age,
            'sub_time' => $sub_time,
            'student_count' => $student_count,
            'id_mentor' => $id_mentor,
            'price' => $price,
            'days' => $days,
            'file1' => $file1,
            'file2' => $file2,
            'file3' => $file3,
            'img' => $img,
            'description' => $description   
        ]);
        if($created){
            return redirect('admincourse');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mentors = DB::table('mentors')->get();
        $courses = DB::table('courses')
        ->select('courses.*' ,'mentors.full_name')
        ->join('mentors', 'mentors.id', '=', 'courses.id_mentor')
        ->where('courses.id', $id)->get();
        //return dd($courses);
        return view('admin.edit.editcourse', ['courses' => $courses, 'mentors' => $mentors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return dd($request);
        $name = $request->name;
        $hour = $request->hour;
        $age = $request->age;
        $sub_time = $request->sub_time;
        $student_count = $request->student_count;
        $id_mentor = $request->id_mentor;
        $img = $request->img;
        $price = $request->price;
        $days = $request->days;
        $file1 = $request->file1;
        $file2 = $request->file2;
        $file3 = $request->file3;
        $description = $request->description;

        $edited = DB::table('courses')->where('id', $id)->update([
            'name' => $name,
            'hour' => $hour,
            'age' => $age,
            'sub_time' => $sub_time,
            'student_count' => $student_count,
            'id_mentor' => $id_mentor,
            'price' => $price,
            'days' => $days,
            'file1' => $file1,
            'file2' => $file2,
            'file3' => $file3,
            'img' => $img,
            'description' => $description   
        ]);
        if($edited){
            return redirect('admincourse');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = DB::table('courses')->where('id', $id)->delete();
        if($deleted){
            return back();
        }
    }
}
