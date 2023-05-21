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

    public function edit(Request $request) {
        $user = Auth::user();
        $request->validate([
            'name' => 'required',
            'grade' => 'numeric'
            // 'faculty_and_department',
            // 'free_text',
            // 'icon'
        ]);

        $name = $request->input('name');
        $grade = $request->input('grade');
        $faculty_and_department = $request->input('faculty_and_department');
        $free_text = $request->input('free_text');
        $icon = $request->file('icon');
        
        if($icon != null){
            // $icon_delete = $user->icon;
            // Storage::disk('public')->delete($icon_delete) ;
            $path =  $icon->store('public/images/profiles');
            $path = str_replace('public/', 'storage/', $path);
            // dd($path);
            // storage/images/profiles/
        }
        Auth::user()->update([
            'name' => $name,
            'grade' => $grade,
            'faculty_and_department' => $faculty_and_department,
            'free_text' => $free_text,
            'icon' => $path
        ]);

        // $profile = $request->all();
        // unset($profile['_token']);
        // $user->fill($profile)->save();

        return view('home');
    }
}
