<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blogs;

class BlogController extends Controller
{
    public function get_blogs(){

        $blogs = DB::table('post')
        ->orderBy('id','desc')
        ->get();
        
        $courses = DB::table('courses')
        ->get([
            'courses.id as id_course',
            'courses.name as course_name'
        ]);

        return view('blog',[
            'blogs'=>$blogs,
            'courses'=>$courses
        ]);
    }
    
    public function get_post($id){

        $blogs = DB::table('post')
        ->orderBy('id','desc')
        ->get();
        $post =  $blogs->where('id','=',$id);
        $courses = DB::table('courses')
        ->get([
            'courses.id as id_course',
            'courses.name as course_name'
        ]);

        return view('post',[
            'post'=>$post,
            'courses'=>$courses,
            'blogs'=>$blogs
        ]);


    } 
}
