<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use App\Models\Events;


class AdminEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $events = DB::table('event')
        ->select('event.*', 'mentors.full_name')
        ->join('mentors', 'mentors.id', '=', 'event.mentor_id')
        ->get();
        
        return view('admin.datas.events', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $mentors = DB::table('mentors')->get();
        return view('admin.add.addevent', ['mentors' => $mentors]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r){
        $date = $r->date;
        $price = $r->price;
        $adress = $r->adress;
        $mentor_id = $r->mentor_id;
        $title = $r->title;
        $time = $r->time;
        $text = $r->text;
        $img = $r->file('img');
        $img_name = $img->getClientOriginalName();
        $path = public_path('assets/img/events/');
        $img_url = asset('assets/img/events/' . $img_name);
        $img->move($path,$img_name);

        $created = DB::table('event')->insert([
            'date' => $date,
            'price' => $price,
            'adress' => $adress,
            'mentor_id' => $mentor_id,
            'title' => $title,
            'time' => $time,
            'text' => $text,
            'img' => $img_url,
        ]);

        return redirect('adminevents');
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
        $event = DB::table('event')
        ->select('event.*', 'mentors.full_name')
        ->join('mentors', 'mentors.id', '=', 'event.mentor_id')
        ->where('event.id', $id)
        ->get();
        return view('admin.edit.editevent', ['mentors' => $mentors, 'event' => $event]);
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
        $date = $r->date;
        $price = $r->price;
        $adress = $r->adress;
        $mentor_id = $r->mentor_id;
        $title = $r->title;
        $time = $r->time;
        $text = $r->text;
        $img_url = '';
        $img_oldurl = Events::find($id)->img;
        if($r->file('img')){
            $img = $r->file('img');
            $img_name = $img->getClientOriginalName();
            $path = public_path('assets/img/events/');
            $img_url = asset('assets/img/events/'.$img_name);
            unlink(public_path(explode(URL::to('/'),$img_oldurl)[1]));
            $img->move($path,$img_name);
        }else{
            $img_url = $img_oldurl;
        }
        $created = DB::table('event')->where('id', $id)->update([
            'date' => $date,
            'price' => $price,
            'adress' => $adress,
            'mentor_id' => $mentor_id,
            'title' => $title,
            'time' => $time,
            'text' => $text,
            'img' => $img_url,
        ]);
        
        return redirect('adminevents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $img = Events::find($id)->img;
        unlink(public_path(explode(URL::to('/'),$img)[1]));
        $deleted = DB::table('event')->where('id', $id)->delete();
        if($deleted){
            return back();
        }
    }
}
