<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;

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
                ->orwhere('average_review','LIKE',"%{$keyword}%")
                ->orwhere('lecture_code','LIKE',"%{$keyword}%")
                ->orwhere('faculty','LIKE',"%{$keyword}%")
                ->orwhere('year','LIKE',"%{$keyword}%")
                ->orwhere('subject','LIKE',"%{$keyword}%");
        }

        $posts = $query->orderBy('lecture_code', 'desc')->paginate(20);
        
        return view('search', compact('posts', 'keyword'));
    }
    
}
