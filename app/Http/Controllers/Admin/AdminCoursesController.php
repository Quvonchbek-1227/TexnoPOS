<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
use Illuminate\Support\Facades\URL;

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
        ->select('courses.*', 'mentors.*', 'mentors.id as mentor_id', 'courses.id as course_id','courses.img as course_img')
        ->join('mentors', 'mentors.id', '=', 'courses.id_mentor')
        ->get();

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
        
        $price = $request->price;
        $days =  $request->days;
        $description = $request->description;
        
        if($request->file('file1')){
            $file1 = $request->file('file1');
            $file1_name = $file1->getClientOriginalName();
            $path = public_path('assets/img/courses/files/');
            $file1->move($path,$file1_name);
            $file1_url = asset('assets/img/courses/files/'.$file1_name);
        }else{
            $file1_url = "null";
        }
        if($request->file('file2')){
            $file2 = $request->file('file2');
            $file2_name = $file2->getClientOriginalName();
            $path = public_path('assets/img/courses/files/');
            $file2->move($path,$file2_name);
            $file2_url = asset('assets/img/courses/files/'.$file2_name);
        }else{
            $file2_url = "null";
        }
        if($request->file('file3')){
            $file3 = $request->file('file3');
            $file3_name = $file3->getClientOriginalName();
            $path = public_path('assets/img/courses/files/');
            $file3->move($path,$file3_name);
            $file3_url = asset('assets/img/courses/files/'.$file3_name);
        }else{
            $file3_url = "null";
        }


        if($request->file('img')){
            $img = $request->file('img');
            $imgName  = $img->getClientOriginalName();
            $path = public_path('assets/img/courses/');
            $img->move($path,$imgName);
            $img_url = asset('assets/img/courses/' . $imgName);
        }else{
            $img_url = 'Pustoy';

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
            'file1' => $file1_url,
            'file2' => $file2_url,
            'file3' => $file3_url,
            'img' => $img_url,
            'description' => $description
        ]);
        
        if($created){
            return redirect()->route('admincourse.index');
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

        $name = $request->name;
        $hour = $request->hour;
        $age = $request->age;
        $sub_time = $request->sub_time;
        $student_count = $request->student_count;
        $id_mentor = $request->id_mentor;
        $price = $request->price;
        $days = $request->days;
        $description = $request->description;
        $path = public_path('assets/img/courses/files/');

        if($request->hasFile('file1')){
            $file1 = $request->file('file1');
            $file1_name = $file1->getClientOriginalName();
            $file1_oldurl = Course::find($id)->file1;
            
            $path = public_path('assets/img/courses/files/');
            $file1_url = asset('assets/img/courses/files/'.$file1_name);
            $file1->move($path, $file1_name);
            if($file1_oldurl !== 'null'){
                unlink(public_path(explode(URL::to('/'), $file1_oldurl)[1]));
            }
        }
        else{
            $file1_url = Course::find($id)->file1;
        }
        if($request->file('file2')){
            $file2 = $request->file('file2');
            $file2_name = $file2->getClientOriginalName();
            $file2_oldurl = Course::find($id)->file2;
            
            $path = public_path('assets/img/courses/files/');
            $file2_url = asset('assets/img/courses/files/'.$file2_name);
            $file2->move($path, $file2_name);
            if($file2_oldurl !== 'null'){
                unlink(public_path(explode(URL::to('/'), $file2_oldurl)[1]));
            }
            
        }
        else{
            $file2_url = Course::find($id)->file2;
        }
        if($request->file('file3')){
            $file3 = $request->file('file3');
            $file3_name = $file3->getClientOriginalName();
            $file3_oldurl = Course::find($id)->file3;
           
            $path = public_path('assets/img/courses/files/');
            $file3_url = asset('assets/img/courses/files/'.$file3_name);
            $file3->move($path, $file3_name); 
            if($file3_oldurl !== 'null'){
                unlink(public_path(explode(URL::to('/'), $file3_oldurl)[1]));
            }
            
        }
        else{
            $file3_url = Course::find($id)->file3;
        }
        if($request->file('img')){
            $old_imgurl = Course::find($id)->img;
            $img = $request->img;
            $img_name = $img->getClientOriginalName();
            $img_oldurl = Course::find($id);
            $path = public_path('assets/img/courses/');
            $img_url = asset('assets/img/courses/'.$img_name);
            $img->move($path,$img_name); 
            unlink(public_path(explode(URL::to('/'),$img_oldurl->img)[1]));
            
        }else{
            $img_url = Course::find($id)->img;;
        }
        $edited = DB::table('courses')->where('id', $id)->update([
            'name' => $name,
            'hour' => $hour,
            'age' => $age,
            'sub_time' => $sub_time,
            'student_count' => $student_count,
            'id_mentor' => $id_mentor,
            'price' => $price,
            'days' => $days,
            'file1' => $file1_url,
            'file2' => $file2_url,
            'file3' => $file3_url,
            'img' => $img_url,
            'description' => $description   
        ]);

            return redirect('admincourse');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $course = Course::find($id);
        $file1 = $course->file1;
        $file2 = $course->file2;
        $file3 = $course->file3;
        $img = $course->img;
        
        if($file1 != 'null'){
            unlink(public_path(explode(URL::to('/'), $file1)[1]));
        }
        if($file2 != 'null'){
            unlink(public_path(explode(URL::to('/'), $file2)[1]));
        }
        if($file3 != 'null'){
            unlink(public_path(explode(URL::to('/'), $file3)[1]));
        }
        unlink(public_path(explode(URL::to('/'), $img)[1]));
        Course::find($id)->delete();
        return redirect()->route('admincourse.index');
    }
}
