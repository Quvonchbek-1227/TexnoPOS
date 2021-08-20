<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

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
        $img = $r->file('img');
        $path = public_path('assets/img/blogs/');
        $img_name = $img->getClientOriginalName();
        $img_url = asset('assets/img/blogs/'.$img_name);
        $img->move($path,$img_name);
        $created = DB::table('post')->insert([
            'title' => $title,
            'date' => date('Y-m-d H:i:s' , strtotime($r->date)),
            'text' => $text,
            'img' => $img_url,
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
        $text = $r->text;
        $img_oldurl = Blogs::find($id)->img;
        if($r->file('img')){
            $img = $r->file('img');
            $path = public_path('assets/img/blogs/');
            $img_name = $img->getClientOriginalName();
            $img_url = asset('assets/img/blogs/'.$img_name);
            unlink(public_path(explode(URL::to('/'),$img_oldurl)[1]));
            $img->move($path,$img_name);
        }else{
            $img_url = $img_oldurl;
        }

        $created = DB::table('post')->where('id', $id)->update([
            'title' => $title,
            'date' => date('Y-m-d H:i:s' , strtotime($r->date)),
            'text' => $text,
            'img' => $img_url,
        ]);
        
        return redirect('adminposts');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $img = Blogs::find($id)->img;
        unlink(public_path(explode(URL::to('/'),$img)[1]));
        $deleted = DB::table('post')->where('id', $id)->delete();
        if($deleted){
            return back();
        }
    }
}
