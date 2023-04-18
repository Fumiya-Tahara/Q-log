<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseRegisterController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\EditUserInfoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/bootstrap', function () {
    return view('bootstrap');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/course_register', [CourseRegisterController::class, 'index']);

Route::post('/course_post', [CourseRegisterController::class, 'create']);

Route::get('/users_edit', [EditUserInfoController::class, 'index']);

Route::put('/users_update', [EditUserInfoController::class, 'edit']);

Route::get('/user_info', [UserInfoController::class, 'profile']);