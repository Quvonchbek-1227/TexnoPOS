<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Programmer;
use Illuminate\Http\Request;
use App\Models\ProgrammerTex;
use App\Models\Texnalogies;

class AdminProgrammerTex extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mas = [];
        $texnalogies = ProgrammerTex::select(
            'programmer.full_name',
            'texnalogies.name',
            'texnalogies_programmer.procent',
            'texnalogies_programmer.id'
        )
        ->join('programmer','programmer.id','texnalogies_programmer.id_programmer')
        ->join('texnalogies','texnalogies.id','texnalogies_programmer.id_texnalogiy')
        ->get()->groupBy('full_name');
        foreach($texnalogies as $tex){
            $mas[] = [
                'programmer'=>$tex[0]->full_name,
                'texnologiya'=>$tex
            ];
        }
        return view('admin.datas.programmer_tex',[
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
        $programmers = Programmer::all();
        $texnalogies = Texnalogies::all();
        return view('admin.add.addprogrammer_tex',[
            'programmers'=>$programmers,
            'texnalogies'=>$texnalogies
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
        $id_programmer = $request->id_programmer;
        $id_texnalogiy = $request->id_texnalogiy;
        $procent = $request->procent;
        ProgrammerTex::create([
            'id_texnalogiy'=>$id_texnalogiy,
            'id_programmer'=>$id_programmer,
            'procent'=>$procent
        ]);
        return redirect()->route('adminprogrammertex.index');
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
        ProgrammerTex::find($id)->delete();
        return back();
    }
}
