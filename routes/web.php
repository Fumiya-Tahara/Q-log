<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseRegisterController;
use App\Http\Controllers\EditUserInfoController;
use App\Http\Controllers\UserInfoController;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\EvaluationsController;

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

Route::get('/evaluation/{course_id}', [App\Http\Controllers\EvaluationsController::class, 'index'])->name('evaluation.index');

Route::post('/evaluation/{course_id}', [App\Http\Controllers\EvaluationsController::class, 'store'])->name('evaluation.store');

Route::get('/course_register', [CourseRegisterController::class, 'index']);

Route::post('/course_post', [CourseRegisterController::class, 'create']);

Route::get('/users_edit', [EditUserInfoController::class, 'index']);

Route::put('/users_update', [EditUserInfoController::class, 'edit']);

Route::get('/user_info', [UserInfoController::class, 'index']);
