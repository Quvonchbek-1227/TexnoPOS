<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrationsController extends Controller
{
    public function index(){
        $registrations = DB::table('registratsiya')
        ->select('registratsiya.*', 'courses.name as course_name')
        ->join('courses', 'courses.id', '=', 'registratsiya.id_course')
        ->get();
        return view('admin.datas.registrations', ['registrations' => $registrations]);
    }

    public function destroy($id){
        $deleted = DB::table('registratsiya')->where('id', $id)->delete();
        if($deleted){
            return back();
        }
    }
}
