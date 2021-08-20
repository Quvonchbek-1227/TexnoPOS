<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mentor;
use App\Models\MentorTex;
use App\Models\Texnalogies;

class AdminMentorTexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experience = [];
        $texnalogies = MentorTex::select('mentors.full_name',
         'texnalogies.name','texnalogies_mentors.id as men_texid',
          'texnalogies_mentors.procent')
        ->join('texnalogies', 'texnalogies.id', 'id_texnalogiy')
        ->join('mentors', 'mentors.id', 'id_mentor')
        ->get()->groupBy('full_name');

        foreach($texnalogies as $key => $texnalogie){
            $experience[] = ["mentor_name"=>$texnalogie[0]['full_name'], "texnologiya"=>$texnalogie];
        }
        return view('admin.datas.mentor_tex',[
            'datas'=>$experience
        ]);
        // return $experience;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mentors = Mentor::all([
            'full_name',
            'id'
        ]);
        $texnalogies = Texnalogies::all();

        return view('admin.add.addmentor_tex',[
            'texnalogies'=>$texnalogies,
            'mentors'=>$mentors
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
        $procent = $request->procent;
        $tex_id = $request->texnalogiy;
        $id_mentor = $request->id_mentor;
        MentorTex::create([
            'id_texnalogiy'=>$tex_id,
            'id_mentor'=>$id_mentor,
            'procent'=>$procent
        ]);
        return redirect()->route('adminmentortex.index');
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
        MentorTex::find($id)->delete();
        return back();
    }
}
