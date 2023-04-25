<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/courses', [App\Http\Controllers\CoursesController::class, 'index'])->name('courses');

Route::get('/search', [App\Http\Controllers\PostController::class, 'index'])
    ->name('posts.index');
Route::get('/search/{search}', [App\Http\Controllers\PostController::class, 'show'])
    ->name('posts.show');
Route::get('/search/create', [App\Http\Controllers\PostController::class, 'create'])
    ->name('posts.create');
