<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;

class FavoriteController extends Controller
{
    //
    public function store($courseId) {
        $user = \Auth::user();
        if (!$user->is_favorite($courseId)) {
            $user->favorite_courses()->attach($courseId);
            $course =Course::find($courseId);
            $course->favorite = true;
            $course->save();
        }
        return back();
    }
    public function destroy($courseId) {
        $user = \Auth::user();
        if ($user->is_favorite($courseId)) {
            $user->favorite_courses()->detach($courseId);
            $course =Course::find($courseId);
            $course->favorite = true;
            $course->save();
        }
        return back();
    }
}
