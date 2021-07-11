<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $posts = DB::table('post')->get();
        return view('admin.datas.posts', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.add.addpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r){
        
        $title = $r->title;
        $date = $r->date;
        $text = $r->text;
        $img = $r->img;

        $created = DB::table('post')->insert([
            'title' => $title,
            'date' => date('Y-m-d H:i:s' , strtotime($r->date)),
            'text' => $text,
            'img' => $img,
        ]);
        
        if($created){
            return redirect('adminposts');
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
        $post = DB::table('post')->where('id', $id)->get();
        return view('admin.edit.editpost', ['post' => $post]);
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
        $date = $r->date;
        $text = $r->text;
        $img = $r->img;

        $created = DB::table('post')->where('id', $id)->update([
            'title' => $title,
            'date' => date('Y-m-d H:i:s' , strtotime($r->date)),
            'text' => $text,
            'img' => $img,
        ]);
        
        if($created){
            return redirect('adminposts');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $deleted = DB::table('post')->where('id', $id)->delete();
        if($deleted){
            return back();
        }
    }
}
