<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\ProgrammersController;
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

Route::get('/course/{id}',[CourseController::class,'course_detail'])->name('course_detail');

Route::get('/mentor/{id}',[MentorController::class,'mentor_portfolio'])->name('mentor_portfolio');

Route::get('/mentors',[MentorController::class,'get_mentors'])->name('mentors');

Route::get('/programmers',[ProgrammersController::class,'get_programmers'])->name('get_programmers');

Route::get('/tch', function () {
    return view('portfolio');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::get('/courses', function () {
    return view('courses');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/es', function () {
    return view('event-single');
});
Route::get('/post', function () {
    return view('post');
});
Route::get('/sle', function () {
    return view('schedule');
});

