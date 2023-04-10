<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        $query = Course::query();

        if(!empty($keyword)) {
            $query->where('name', 'LIKE', "%{$keyword}%")
                ->orWhere('teacher', 'LIKE', "%{$keyword}%");
        }

        $posts = $query->get();

        return view('courses', compact('posts', 'keyword'));
    }
}
