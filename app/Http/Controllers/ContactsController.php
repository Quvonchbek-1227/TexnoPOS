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
    public function add_message(Request $request){
        $connected = 'true';
        $email = $request->email;
        $name = $request->name;
        $message = $request->message;
        $add = DB::table('messages')->insert([
            'name'=>$name,
            'email'=>$email,
            'message'=>$message
        ]);

        return redirect('/contacts');

    }
    public function add_user(Request $request){
        $add = DB::table('registratsiya')
        ->insert([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'id_course'=>$request->course,
            'text'=>$request->message
        ]);
        return redirect()->back();
    }


    
}
