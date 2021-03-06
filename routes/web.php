<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Admin\AdminCoursesController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\ProgrammersController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProectsController;

use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegistrationsController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminStudentsController;
use App\Http\Controllers\TexnologiesController;
use App\Http\Controllers\Admin\AdminMentorsController;
use App\Http\Controllers\Admin\AdminAboutsController;
use App\Http\Controllers\Admin\AdminEventsController;
use App\Http\Controllers\admin\AdminGallery;
use App\Http\Controllers\Admin\AdminMessagesController;
use App\Http\Controllers\Admin\AdminPostsController;
use App\Http\Controllers\Admin\AdminProgrammersController;
use App\Http\Controllers\Admin\AdminTexnologiesController;
use App\Http\Controllers\Admin\AdminProectsController;
use App\Http\Controllers\Admin\AdminMentorTexController;
use App\Http\Controllers\admin\AdminProgrammerTex;
use App\Http\Controllers\admin\AdminStudentTexController;
use App\Http\Controllers\admin\AdminCoursesBladeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[MainController::class,'index'])->name('home_page');
Route::get('/course',[CourseController::class,'get_courses'])->name('get_courses');
Route::get('/course/{id}',[CourseController::class,'course_detail'])->whereNumber('id')->name('course_detail');
Route::get('/mentor/{id}',[MentorController::class,'mentor_portfolio'])->whereNumber('id')->name('mentor_portfolio');
Route::get('/mentors',[MentorController::class,'get_mentors'])->name('mentors');
Route::get('/programmers',[ProgrammersController::class,'get_programmers'])->name('get_programmers');
Route::get('/programmer/{id}',[ProgrammersController::class,'programmer_portfolio'])->whereNumber('id')->name('programmer_portfolio');
Route::get('/students',[StudentController::class,'get_students'])->name('get_students');
Route::get('/student/{id}',[StudentController::class,'student_portfolio'])->whereNumber('id')->name('student_portfolio');
Route::get('/blog',[BlogController::class,'get_blogs'])->name('get_blogs');
Route::get('/blog/{id}',[BlogController::class,'get_post'])->whereNumber('id')->name('get_post');
Route::get('/contacts',[ContactsController::class,'contacts'])->name('contacts');
Route::post('/message',[ContactsController::class,'add_message'])->name('add_message');
Route::post('/adduser',[ContactsController::class,'add_user'])->name('add_user');
Route::get('/events',[EventController::class,'get_events'])->name('get_events');
Route::get('/events/{id}',[EventController::class,'event'])->whereNumber('id')->name('event');
Route::get('/about',[AboutController::class,'about'])->name('about');
Route::get('/allproects',[ProectsController::class,'allproects'])->name('allproects');

Route::get('/allproects/{id}',[ProectsController::class,'get_proect'])->name('get_proect');
Route::get('/sle', function () {

    return view('schedule'); 
});

Route::get('admin', [AdminController::class, 'gettables']);
Route::get('logintoadmin', [AdminController::class, 'admincheck']);


Route::get('frontend_seeimg', [AdminController::class, 'frontend_seeimg']);

//Bas betdegi birinshi suretdi update qiluw ushin url lar
Route::get('indexbladesetimg', [AdminController::class, 'indexbladesetimg']);
Route::post('indexupdateimg', [AdminController::class, 'indexupdateimg']);
Route::get('index_createimg', [AdminController::class, 'index_createimg']);
Route::post('index_addimg', [AdminController::class, 'index_addimg']);

Route::get('courses_index', [AdminController::class, 'courses_index']);
Route::post('courses_update', [AdminController::class, 'courses_update']);
Route::get('courses_create', [AdminController::class, 'courses_create']);
Route::post('courses_store', [AdminController::class, 'courses_store']);


Route::resource('admincourse', AdminCoursesController::class);
Route::resource('adminmentors', AdminMentorsController::class);
Route::resource('adminabouts', AdminAboutsController::class);
Route::resource('adminevents', AdminEventsController::class);
Route::resource('adminmessages', AdminMessagesController::class);
Route::resource('adminposts', AdminPostsController::class);
Route::resource('adminprogrammers', AdminProgrammersController::class);
Route::resource('adminregistrations', RegistrationsController::class);
Route::resource('adminstudents', AdminStudentsController::class);
Route::resource('admintexnologies', AdminTexnologiesController::class);
Route::resource('adminproects', AdminProectsController::class);
Route::resource('adminmentortex', AdminMentorTexController::class);
Route::resource('adminprogrammertex',AdminProgrammerTex::class);
Route::resource('adminstudenttex',AdminStudentTexController::class);
Route::resource('admingallery',AdminGallery::class);

