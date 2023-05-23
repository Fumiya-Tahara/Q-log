<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CoursesController extends Controller
{
    //
    public function index()
    {
        $keyword='';
        return view('courses',compact('keyword'));
    }
    public function favorite_courses()
    {
        $user = \Auth::user(); // 現在の認証済みユーザーを取得

        $posts = $user->favorite_courses()->orderBy('created_at', 'desc')->paginate(20);

        return view('favorite_courses', ['posts' => $posts]);
    }
}
// 