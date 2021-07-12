<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminAboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $abouts = DB::table('about')->get();
        return view('admin.datas.abouts', ['abouts' => $abouts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.add.addabout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r){
        $title = $r->title;
        $text = $r->text;
        $img = $r->img;
        if(empty($img)){
            $img = "asd";
        }
        $created = DB::table('about')->insert([
            'title' => $title,
            'text' => $text,
            'img' => $img,
        ]);
        if($created){
            return redirect('adminabouts');
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
        $about = DB::table('about')->where('id', $id)->get();
        return view('admin.edit.editabout', ['about' => $about]);
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
        $title = $r->title;
        $text = $r->text;
        $img = $r->img;
        if(empty($img)){
            $img = "asd";
        }
        $created = DB::table('about')->where('id',$id)->update([
            'title' => $title,
            'text' => $text,
            'img' => $img,
        ]);
        if($created){
            return redirect('adminabouts');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $deleted = DB::table('about')->where('id', $id)->delete();
        if($deleted){
            return back();
        }
    }
}
