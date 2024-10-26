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
    return redirect('/login');
});

Route::view('/login', 'auth.login');
Route::view('/teacher', 'teacher.index');
Route::view('/teacher/list', 'teacher.list');
Route::view('/teacher/create', 'teacher.create');
Route::view('/teacher/edit', 'teacher.edit');
Route::view('/student', 'student.index');
Route::view('/student/nilai', 'student.show');

