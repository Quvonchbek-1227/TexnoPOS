<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mentor;

class AdminMentorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mentors = DB::table('mentors')
        ->select('mentors.*', 'mentors.id as mentor_id')
        ->get();
        //return dd($mentors);
        return view('admin.datas.mentors', ['mentors' => $mentors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = DB::table('courses')->get();
        return view('admin.add.addmentor', ['courses' => $courses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r){
        $full_name = $r->full_name;
        $phone = $r->phone;
        $email = $r->email;
        $about = $r->about;
        $portfolio_detail = $r->portfolio_detail;
        $experiense = $r->experiense;
        $bitirgen = $r->bitirgen;
        $telegram = $r->telegram;
        $facebook = $r->facebook;
        $instagram = $r->instagram;
        $img = $r->img;
        $birthday = $r->birthday;

        if(empty($img)){
            $img = "file1";
        }

        $created = DB::table('mentors')->insert([
            'full_name' => $full_name,
            'phone' => $phone,
            'email' => $email,
            'about' => $about,
            'portfolio_detail' => $portfolio_detail,
            'experiense' => $experiense,
            'bitirgen' => $bitirgen,
            'telegram' => $telegram,
            'facebook' => $facebook,
            'instagram' => $instagram,
            'img' => $img,
            'birthday' => $birthday,
        ]);

        if($created){
            return redirect('adminmentors');
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
        $mentors = DB::table('mentors')
        ->select('mentors.*')
        ->get();
        return view('admin.edit.editmentor', ['mentors' => $mentors, 'courses' => $courses]);
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
        $about = $r->about;
        $portfolio_detail = $r->portfolio_detail;
        $experiense = $r->experiense;
        $bitirgen = $r->bitirgen;
        $telegram = $r->telegram;
        $facebook = $r->facebook;
        $instagram = $r->instagram;
        $img = $r->img;
        $birthday = $r->birthday;

        if(empty($img)){
            $img = "file1";
        }

        $edited = DB::table('mentors')->where('id' , $id)->update([
            'full_name' => $full_name,
            'phone' => $phone,
            'email' => $email,
            'about' => $about,
            'portfolio_detail' => $portfolio_detail,
            'experiense' => $experiense,
            'bitirgen' => $bitirgen,
            'telegram' => $telegram,
            'facebook' => $facebook,
            'instagram' => $instagram,
            'img' => $img,
            'birthday' => $birthday,
        ]);

        if($edited){
            return redirect('adminmentors');
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
        Mentor::find($id)->delete();
        return redirect()->route('adminmentors.index');
    }
}
