<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\FavoriteController;
=======
use App\Http\Controllers\CourseRegisterController;
use App\Http\Controllers\EditUserInfoController;
use App\Http\Controllers\UserInfoController;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\EvaluationsController;
>>>>>>> 41e669ccef8c033d7161420d210e351e66078fab

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

<<<<<<< HEAD
Route::get('/courses', [App\Http\Controllers\CoursesController::class, 'index'])->name('courses');

Route::get('/search', [App\Http\Controllers\PostController::class, 'index'])
    ->name('posts.index');
Route::get('/search/{search}', [App\Http\Controllers\PostController::class, 'show'])
    ->name('posts.show');
Route::get('/search/create', [App\Http\Controllers\PostController::class, 'create'])
    ->name('posts.create');
Route::post('/search/{post}/favorite', [FavoriteController::class, 'store'])->name('Favorite.store');
Route::delete('/search/{post}/unfavorite', [FavoriteController::class, 'destroy'])->name('Favorite.destroy');
Route::get('/favorites', [CoursesController::class, 'favorite_courses'])->name('favorites');
=======
Route::get('/evaluation/{course_id}', [App\Http\Controllers\EvaluationsController::class, 'index'])->name('evaluation.index');

Route::post('/evaluation/{course_id}', [App\Http\Controllers\EvaluationsController::class, 'store'])->name('evaluation.store');

Route::get('/course_register', [CourseRegisterController::class, 'index']);

Route::post('/course_post', [CourseRegisterController::class, 'create']);

Route::get('/users_edit', [EditUserInfoController::class, 'index']);

Route::put('/users_update', [EditUserInfoController::class, 'edit']);

Route::get('/user_info', [UserInfoController::class, 'index']);
>>>>>>> 41e669ccef8c033d7161420d210e351e66078fab
