<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class AdminController extends Controller
{
    public function gettables(){
        return view('admin.login');
    }
    public function admincheck(Request $request){
        /* Admin panelge kirgende adminba ya userma tekserushi funkciya*/
        $pass1 = $request->password;
        $login1 = $request->login;
        $admins = DB::table('admins')
        ->get();
        $error = false;
        foreach($admins as $admin){
            if($admin->login === $login1 && $admin->password === $pass1){
                $error = false;
            }else{
                $error = true;
            }
        }
        if($error){
            return view('admin.login',['error'=>$error]);
        }else{
            return view('admin.admin',['login'=>$login1]);
        }
    }

    public function frontend_seeimg(){
        //Frontend degi suretlerdi admin panelde korsetip beruwshi funksiya
        $index_img = DB::table('indexblade')->get();
        $courses_img = DB::table('coursesblade')->get();
        return view('admin.fontendedit',[
            'index_img'=>$index_img,
            'courses_img'=>$courses_img
        ]);
    }
    public function indexbladesetimg(){
        //Bas betdegi suretdin` ornina basqa suret qosuwshi viewdi ashatin funkciya
        return view('admin.edit.editindeximg');
    }

    public function index_createimg(){
        return view('admin.add.addindeximg');
    }

    public function index_addimg(Request $request){
        if($request->hasFile('img')){
            $db = DB::table('indexblade')->get();

            if(count($db) === 0){
                $img = $request->file('img');
                $imgName = $img->getClientOriginalName();
                $img_url = asset('assets/img/frontend/indexpage/' . $imgName);
                $path = public_path('assets/img/frontend/indexpage/');
                $img->move($path,$imgName);
                DB::table('indexblade')->insert([
                    'image'=>$img_url
                ]);
                return redirect('frontend_seeimg');

            }else{
                $error = true;
                return view('admin.add.addcoursesimg',[
                    'error'=>$error
                ]);
            }
        }else{
            return 'Error Suret Juklenbedi!';
        }

    }

    public function indexupdateimg(Request $request){
        //Bas bet ushin kelgen suretdi update qilip beretin funkciya

       if($request->hasFile('rasim')){
        
        $img_oldurl = DB::table('indexblade')->get()[0]->image;
        unlink(public_path(explode(URL::to('/'),$img_oldurl)[1]));
        
        $img = $request->file('rasim');
        $imgName = $img->getClientOriginalName();
        $path = public_path('assets/img/frontend/indexpage/');
        $img_url = asset('assets/img/frontend/indexpage/' . $imgName);
        $img->move($path,$imgName);
        DB::table('indexblade')->update([
            'image'=>$img_url
        ]);
        return redirect('frontend_seeimg');
       }else{
           return 'error';
       }
    }

    //Courses page degi suretdi update qiluw ushin funciyalar

    public function courses_index(){
        return view('admin.edit.editcoursesimg');
    }
    public function courses_update(Request $request){
        if($request->hasFile('img')){

            $old_imgurl = DB::table('coursesblade')->get()[0]->image;
            unlink(public_path(explode(URL::to('/'),$old_imgurl)[1]));

            $img = $request->file('img');
            $img_name = $img->getClientOriginalName();
            $path = public_path('assets/img/frontend/coursespage/');
            $img_url = asset('assets/img/frontend/coursespage/' . $img_name);
            DB::table('coursesblade')->update([
                'image'=>$img_url
            ]);
            $img->move($path,$img_name);
            return redirect('frontend_seeimg');
        }else{
            return 'error';
        }

    }
    
    public function courses_create(){
        return view('admin.add.addcoursesimg');
    }
    public function courses_store(Request $request){
        
        if($request->hasFile('img')){
            $db = DB::table('coursesblade')->get();
            if(count($db) === 0){
                $img = $request->file('img');
                $imgName = $img->getClientOriginalName();
                $img_url = asset('assets/img/frontend/coursespage/' . $imgName);
                $path = public_path('assets/img/frontend/coursespage/');
                $img->move($path,$imgName);
                DB::table('coursesblade')->insert([
                    'image'=>$img_url
                ]);
                return redirect('frontend_seeimg');
                
            }else{
                $error = true;
                return view('admin.add.addcoursesimg',['error'=>$error]);
            }
        }else{
            return 'Suret Kiritilmedi!';
        }
    }


}