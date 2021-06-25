<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programmer;
use Illuminate\Support\Facades\DB;


class ProgrammersController extends Controller
{
    public function get_programmers(){
        $status = 'programmer';
        $programmers = DB::table('programmer')
        ->get();
        return view('teachers',[
            'mentors'=>$programmers,
            'status'=>$status
        ]);
    }
    public function get_mentor(){
        $status = 'programmer';
        
    }
}
