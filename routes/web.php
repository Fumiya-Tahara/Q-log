<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseRegisterController;

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

Route::post('/register', [CourseRegisterController::class, 'create']);

Route::get('/edit_user_info', function () {
    return view('edit_user_info');
});

Route::get('/user_info', function () {
    return view('user_info');
});
