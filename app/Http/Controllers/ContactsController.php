<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ContactsController extends Controller
{
    public function contacts(){

        $courses = DB::table('courses')
        ->get([
            'courses.id as id_course',
            'courses.name as course_name'
        ]);

        return view('contacts',[
            'courses'=>$courses
        ]);
    }

    
}
