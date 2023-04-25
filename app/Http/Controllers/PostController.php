<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        $query = Course::query();

        if(!empty($keyword)) {
            $query->where('name', 'LIKE', "%{$keyword}%")
                ->orWhere('teacher', 'LIKE', "%{$keyword}%")
                ->orwhere('term','LIKE',"%{$keyword}%")
                ->orwhere('average_review','LIKE',"%{$keyword}%");
        }

        $posts = $query->get();

        return view('search', compact('posts', 'keyword'));
    }
    public function show(Request $request)
    {
        $keyword = $request->input('keyword');

        $query = Course::query();

        if(!empty($keyword)) {
            $query->where('name', 'LIKE', "%{$keyword}%")
                ->orWhere('teacher', 'LIKE', "%{$keyword}%")
                ->orwhere('term','LIKE',"%{$keyword}%")
                ->orwhere('average_review','LIKE',"%{$keyword}%");
        }

        $posts = $query->get();

        return view('search', compact('posts', 'keyword'));
    }
    public function create(Request $request)
    {
        $keyword = $request->input('keyword');

        $query = Course::query();

        if(!empty($keyword)) {
            $query->where('name', 'LIKE', "%{$keyword}%")
                ->orWhere('teacher', 'LIKE', "%{$keyword}%")
                ->orwhere('term','LIKE',"%{$keyword}%")
                ->orwhere('average_review','LIKE',"%{$keyword}%");
        }

        $posts = $query->get();

        return view('search', compact('posts', 'keyword'));
    }
    
}
