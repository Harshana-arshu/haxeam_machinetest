<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('class_index', 'App\Http\Controllers\AdminController@index');
Route::post('class_store','App\Http\Controllers\AdminController@class_store');

Route::get('division', 'App\Http\Controllers\AdminController@division');
Route::post('division_store', 'App\Http\Controllers\AdminController@division_store');

Route::get('sub_index', 'App\Http\Controllers\AdminController@subject_index');
Route::get('delete/{id}','App\Http\Controllers\AdminController@delete');
Route::get('sub', 'App\Http\Controllers\AdminController@subject');
Route::post('sub_store', 'App\Http\Controllers\AdminController@subject_store');

Route::get('teacherlogin', 'App\Http\Controllers\LoginController@tchrslogin');
Route::get('teacherreg', 'App\Http\Controllers\LoginController@create_tchrslogin');
Route::post('teacher_store', 'App\Http\Controllers\LoginController@login');
Route::post('teacherreg/store', 'App\Http\Controllers\LoginController@techearreg_store');

Route::get('adminlogin', 'App\Http\Controllers\AdminLoginController@adminlogin');
Route::post('adminlogin/store', 'App\Http\Controllers\AdminLoginController@login');

Route::get('student_create', 'App\Http\Controllers\AdminController@student_create');
Route::get('get_division', 'App\Http\Controllers\AdminController@get_division');
Route::post('student_store', 'App\Http\Controllers\AdminController@student_store');
Route::get('student', 'App\Http\Controllers\AdminController@student');

Route::get('mark/create/{id}', 'App\Http\Controllers\AdminController@marks');
Route::get('mark_index', 'App\Http\Controllers\AdminController@mark_index');
Route::post('mark/store', 'App\Http\Controllers\AdminController@mark_store');

