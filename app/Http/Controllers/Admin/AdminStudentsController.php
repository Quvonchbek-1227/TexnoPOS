<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminStudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = DB::table('students')
        ->select('students.*', 'courses.name as course_name')
        ->join('courses', 'courses.id', '=', 'students.id_course')
        ->get();
        return view('admin.datas.students', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = DB::table('courses')->get();

        return view('admin.add.addstudent', ['courses' => $courses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $full_name = $r->full_name;
        $phone = $r->phone;
        $email = $r->email;
        $experiense = $r->experiense;
        $bitirgen = $r->bitirgen;
        $telegram = $r->telegram;
        $facebook = $r->facebook;
        $instagram = $r->instagram;;
        $birthday = $r->birthday;
        $id_course = $r->id_course;
        $about = $r->about;
        $portfolio_detail = $r->portfolio_detail;
        $img = $r->img;
        if(empty($img)){
            $img = "dsad";
        }
        
        $created = DB::table('students')->insert([
            'full_name' => $full_name,
            'phone' => $phone,
            'email' => $email,
            'experiense' => $experiense,
            'bitirgen' => $bitirgen,
            'telegram' => $telegram,
            'facebook' => $facebook,
            'instagram' => $instagram,
            'birthday' => $birthday,
            'id_course' => $id_course,
            'about' => $about,
            'portfolio_detail' => $portfolio_detail,
            'img' => $img,
        ]);

        if($created){
            return redirect('adminstudents');
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
        $courses = DB::table('courses')->get();
        $students = DB::table('students')
        ->select('students.*','courses.id as course_id', 'courses.name as course_name')
        ->join('courses', 'courses.id', '=', 'students.id_course')
        ->get();
        return view('admin.edit.editstudent', ['students' => $students, 'courses' => $courses]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        $full_name = $r->full_name;
        $phone = $r->phone;
        $email = $r->email;
        $experiense = $r->experiense;
        $bitirgen = $r->bitirgen;
        $telegram = $r->telegram;
        $facebook = $r->facebook;
        $instagram = $r->instagram;;
        $birthday = $r->birthday;
        $id_course = $r->id_course;
        $about = $r->about;
        $portfolio_detail = $r->portfolio_detail;
        $img = $r->img;
        if(empty($img)){
            $img = "dsad";
        }
        
        $edited = DB::table('students')->where('id', $id)->update([
            'full_name' => $full_name,
            'phone' => $phone,
            'email' => $email,
            'experiense' => $experiense,
            'bitirgen' => $bitirgen,
            'telegram' => $telegram,
            'facebook' => $facebook,
            'instagram' => $instagram,
            'birthday' => $birthday,
            'id_course' => $id_course,
            'about' => $about,
            'portfolio_detail' => $portfolio_detail,
            'img' => $img,
        ]);

        if($edited){
            return redirect('adminstudents');
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
        $deleted = DB::table('students')->where('id', $id)->delete();
        if($deleted){
            return back();
        }
    }
    
}
