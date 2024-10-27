<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth.check'])->group(function () {
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['teacher.check'])->group(function () {
    Route::view('/teacher', 'teacher.index');
    Route::view('/teacher/list', 'teacher.list');
    Route::view('/teacher/create', 'teacher.create');
    Route::view('/teacher/edit', 'teacher.edit');
});

Route::middleware(['student.check'])->group(function () {
    Route::view('/student', 'student.index');
    Route::view('/student/nilai', 'student.show');
});
