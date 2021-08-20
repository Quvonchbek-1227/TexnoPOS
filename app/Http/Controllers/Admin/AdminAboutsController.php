<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Abouts;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

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

        $img = $r->file('img');
        $imgName = $img->getClientOriginalName();
        $path = public_path('assets/img/about/');
        $img->move($path, $imgName);
        $url = asset('assets/img/about/' . $imgName);

        $created = DB::table('about')->insert([
            'title' => $title,
            'text' => $text,
            'img' => $url,
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
        $old_img_url = Abouts::where('id',$id)->get();
        $old_img = $old_img_url[0]->img;
        if($r->file('img')){
            foreach($old_img_url as $img){
                unlink(public_path(explode(URL::to('/'), $img->img)[1]));
            }
            $img = $r->file('img');
            $imgName = $img->getClientOriginalName();
            $path = public_path('assets/img/about/');
            $url = asset('assets/img/about/'.$imgName);
            $img->move($path, $imgName);
            Abouts::find($id)->update([
                'title' => $title,
                'text' => $text,
                'img' => $url,
            ]);
        }else{
            Abouts::find($id)->update([
                'title' => $title,
                'text' => $text,
                'img' => $old_img,
            ]);
        }
        
        return redirect('adminabouts');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $img = Abouts::find($id)->img;
        unlink(public_path(explode(URL::to('/'),$img)[1]));
        $deleted = DB::table('about')->where('id', $id)->delete();
        if($deleted){
            return back();
        }
    }
}
