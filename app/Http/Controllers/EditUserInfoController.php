<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditUserInfoController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('edit_user_info', compact('user'));
    }

    public function edit(Request $request, User $user) {
        // $user = User::find($profile);

        // $name = $request['name'];
        // $grade = $request['grade'];
        // $faculty_and_department = $request['faculty_and_department'];
        // $icon = $request['icon'];
        // $free_text = $request['free_text'];

        $user = Auth::user();
        User::where($user, 'user')->update([
            $user->name = $request->input('name'),
            $user->grade = $request->input('grade'),
            $user->faculty_and_department = $request->input('faculty_and_department'),
            $user->free_text = $request->input('free_text'),
            $user->icon = $request->input('icon'),
        ]);

        
        // $user->save();
        // update([
        //     'name' => $name,
        //     'grade' => $grade,
        //     'faculty_and_department' => $faculty_and_department,
        //     'icon' => $icon,
        //     'free_text' => $free_text
        // ]);
        // $user->name = $name->save();
        // $user->grade = $grade->save();
        // $user->faculty_and_department = $faculty_and_department->save();
        // $user->icon = $icon->save();
        // $user->free_text = $free_text->save();

        return view('/home');
    }
}
