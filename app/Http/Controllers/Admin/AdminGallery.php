<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class AdminGallery extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Gallery::all();
        return view('admin.datas.gallery',[
            'images'=>$images
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add.addgallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->file('img');
        $img_name = $img->getClientOriginalName();
        $imgname = $img->getClientOriginalExtension();
        $img_name = pathinfo($img_name, PATHINFO_FILENAME);
        $img_name = $img_name.time().'.'.$imgname;
        $path = public_path('assets/img/gallery/');
        $img_url = asset('assets/img/gallery/'.$img_name);
        $img->move($path,$img_name);
        Gallery::create([
            'img'=>$img_url
        ]);
        return redirect()->route('admingallery.index');

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
        return view('admin.edit.editgallery',['id'=>$id]);
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
        $img_oldurl = Gallery::find($id)->img;
        if($request->file('img')){
            $img = $request->file('img');
            $path = public_path('assets/img/gallery/');
            $img_name = $img->getClientOriginalName();
            $imgname = $img->getClientOriginalExtension();
            $img_name = pathinfo($img_name,PATHINFO_FILENAME);
            $img_name = $img_name.time().'.'.$imgname;
            $img_url = asset('assets/img/gallery/'. $img_name);
            unlink(public_path(explode(URL::to('/'),$img_oldurl)[1]));
            $img->move($path,$img_name);
            Gallery::find($id)->update([
                'img'=>$img_url
            ]);
        }
        return redirect()->route('admingallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $img  = Gallery::find($id)->img;
        unlink(public_path(explode(URL::to('/'),$img)[1]));
        Gallery::find($id)->delete();
        return back();
    }
}
