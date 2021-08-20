<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\student;
use Illuminate\Http\Request;
use App\Models\StudentTex;
use App\Models\Texnalogies;

class AdminStudentTexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $texnalogies = StudentTex::select(
            'students.full_name',
            'texnalogies.name',
            'texnalogies_student.procent',
            'texnalogies_student.id'
        )
        ->join('students','students.id','texnalogies_student.id_student')
        ->join('texnalogies','texnalogies.id','texnalogies_student.id_texnalogiy')
        ->get()->groupBy('full_name');
        $mas = [];
        foreach($texnalogies as $texnalogiy){
            $mas[] = [
                'student'=>$texnalogiy[0]->full_name,
                'texnalogiya'=>$texnalogiy
            ];
        }
        return view('admin.datas.student_tex',[
            'datas'=>$mas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add.addstudent_tex',[
            'students'=>student::all(),
            'texnalogies'=>Texnalogies::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        StudentTex::create($request->except(['_token', '_method']));
        return redirect()->route('adminstudenttex.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StudentTex::find($id)->delete();
        return back();
    }
}
