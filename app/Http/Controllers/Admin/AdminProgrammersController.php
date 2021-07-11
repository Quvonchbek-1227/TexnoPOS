<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProgrammersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $programmers = DB::table('programmer')->get();
        return view('admin.datas.programmers', ['programmers' => $programmers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.add.addprogrammer');
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
        $experiense = $r->experiense;
        $bitirgen = $r->bitirgen;
        $telegram = $r->telegram;
        $facebook = $r->facebook;
        $instagram = $r->instagram;;
        $birthday = $r->birthday;
        $about = $r->about;
        $portfolio_detail = $r->portfolio_detail;
        $img = $r->img;
        if(empty($img)){
            $img = "dsad";
        }
        
        $created = DB::table('programmer')->insert([
            'full_name' => $full_name,
            'phone' => $phone,
            'email' => $email,
            'experiense' => $experiense,
            'bitirgen' => $bitirgen,
            'telegram' => $telegram,
            'facebook' => $facebook,
            'instagram' => $instagram,
            'birthday' => $birthday,
            'about' => $about,
            'portfolio_detail' => $portfolio_detail,
            'img' => $img,
        ]);

        if($created){
            return redirect('adminprogrammers');
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
        $programmer = DB::table('programmer')->where('id', $id)->get();
        return view('admin.edit.editprogrammer', ['programmer' => $programmer]);
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
        $about = $r->about;
        $portfolio_detail = $r->portfolio_detail;
        $img = $r->img;
        if(empty($img)){
            $img = "dsad";
        }
        
        $created = DB::table('programmer')->where('id', $id)->update([
            'full_name' => $full_name,
            'phone' => $phone,
            'email' => $email,
            'experiense' => $experiense,
            'bitirgen' => $bitirgen,
            'telegram' => $telegram,
            'facebook' => $facebook,
            'instagram' => $instagram,
            'birthday' => $birthday,
            'about' => $about,
            'portfolio_detail' => $portfolio_detail,
            'img' => $img,
        ]);

        if($created){
            return redirect('adminprogrammers');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        DB::table('programmer')->where('id', $id)->delete();
        return back();
        
    }
}
