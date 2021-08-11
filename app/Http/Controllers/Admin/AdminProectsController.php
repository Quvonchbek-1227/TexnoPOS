<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Mentor;
use App\Models\proect;
use App\Models\Programmer;
use App\Models\student;
use App\Models\PrImg;
use Illuminate\Support\Facades\URL;
class AdminProectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proects = proect::all();

        $view = [];
        foreach ($proects as $proect) {
            if ($proect->is_mentor == 1) {
                $check = Mentor::find($proect->id_person);
                $proect->full_name = $check['full_name'];
            } elseif ($proect->is_programmer == 1) {
                $proect->full_name = Programmer::find($proect->id_person)['full_name'];
            } elseif ($proect->is_student == 1) {
                $proect->full_name = student::find($proect->id_person)['full_name'];
            }

            $view[] = $proect;
        }

        return view('admin.datas.proects', [
            'proects' => $view
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programmers = Programmer::all([
            'id',
            'full_name'
        ]);
        $mentor = Mentor::all([
            'id',
            'full_name'
        ]);
        $student = student::all([
            'id',
            'full_name'
        ]);
        return view('admin.add.addproects', [
            'mentors' => $mentor,
            'students' => $student,
            'programmers' => $programmers
        ]);
        // return $programmers; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $type = $request->type;
        $title = $request->title;
        $description = $request->portfolio_detail;
        $is_mentor = 0;
        $is_programmer = 0;
        $is_student = 0;
        $id_person = 0;

        if ($request->id_mentor != null) {
            $id_person = $request->id_mentor;
            $is_mentor = 1;

        } elseif ($request->id_programmer != null) {
            $id_person = $request->id_programmer;
            $is_programmer = 0;

        } elseif ($request->id_student != null) {
            $id_person = $request->id_student;
            $is_student = 0;

        }

        $project_created = proect::create([
            'is_mentor' => $is_mentor,
            'is_programmer' => $is_programmer,
            'is_student' => $is_student,
            'type' => $type,
            'text' => $description,
            'title' => $title,
            'id_person' => $id_person
        ]);

        for ($i = 0; $i < 4; $i++) {
            if (isset($request->file('suretler')[$i])) {
                $img = $request->file('suretler')[$i];
                $imgName = $img->getClientOriginalName();
                $path = public_path('assets/img/proects/');
                $img->move($path, $imgName);
                $url = asset('assets/img/proects/' . $imgName);
                PrImg::create([
                    'img' => $url,
                    'id_proect' => $project_created->id
                ]);
            }
        }

        return redirect()->route('adminproects.index');
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
        $programmers = Programmer::all([
            'id',
            'full_name'
        ]);
        $mentor = Mentor::all([
            'id',
            'full_name'
        ]);
        $student = student::all([
            'id',
            'full_name'
        ]);


        $proect = proect::find($id);

        return view('admin.edit.editproects', [
            'proect' => $proect,
            'mentors' => $mentor,
            'students' => $student,
            'programmers' => $programmers
        ]);
        // return $proect;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $type = $request->type;
        $title = $request->title;
        $description = $request->portfolio_detail;
        $suretler = $request->suretler;
        
        if (isset($suretler)) {
            $old_img_url = PrImg::where('id_proect', $id)->get();
            foreach($old_img_url as $img){
                PrImg::where('id_proect', $id)->delete();
                unlink(public_path(explode(URL::to('/'), $img->img)[1]));
                // return public_path(explode(URL::to('/'), $img->img)[1]);
            }
            
            
            
            for ($i = 0; $i < 4; $i++) {
                if (isset($request->file('suretler')[$i])) {
                    $img = $request->file('suretler')[$i];
                    $imgName = $img->getClientOriginalName();
                    $path = public_path('assets/img/proects/');
                    $img->move($path, $imgName);
                    $url = asset('assets/img/proects/' . $imgName);
                    PrImg::create([
                        'img' => $url,
                        'id_proect' => $id
                    ]);
                }
            }
        }

        $is_mentor = 0;
        $is_programmer = 0;
        $is_student = 0;
        $id_person = 0;
        if ($request->id_mentor != null) {
            $id_person = $request->id_mentor;
            $is_mentor = 1;
        } elseif ($request->id_programmer != null) {
            $id_person = $request->id_programmer;
            $is_programmer = 1;
        } elseif ($request->id_student != null) {
            $id_person = $request->id_student;
            $is_student = 1;
        }
        proect::find($id)->update([
            'is_mentor' => $is_mentor,
            'is_programmer' => $is_programmer,
            'is_student' => $is_student,
            'type' => $type,
            'text' => $description,
            'title' => $title,
            'id_person' => $id_person
        ]);

        return redirect()->route('adminproects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        foreach(PrImg::where('id_proect', $id)->get() as $img){
            PrImg::where('id_proect', $id)->delete();
            unlink(public_path(explode(URL::to('/'), $img->img)[1]));
        }
        proect::find($id)->delete();
        PrImg::where('id_proect', $id)->delete();
        return redirect()->route('adminproects.index');
    }
}
