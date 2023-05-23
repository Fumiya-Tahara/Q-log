<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FavoriteController extends Controller
{
    //
    public function store($courseId) {
        $user = \Auth::user();
        if (!$user->is_favorite($courseId)) {
            $user->favorite_courses()->attach($courseId);
        }
        return back();
    }
    public function destroy($courseId) {
        $user = \Auth::user();
        if ($user->is_favorite($courseId)) {
            $user->favorite_courses()->detach($courseId);
        }
        return back();
    }
}
