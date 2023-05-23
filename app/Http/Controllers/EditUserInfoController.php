<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
            'grade' => 'numeric|nullable',
            'faculty_and_department' => 'max:255|nullable',
            'free_text' => 'max:255|nullable',
            'icon' => 'image|nullable'
        ],
    [
        'name.required' => '名前は必須です。',
        'grade' => '学年は半角数字で入力してください。',
        'faculty_and_department' => '学部・専攻はn文字以下で入力してください。',
        'free_text' => 'free_textは255文字以下で入力してください。',
        'icon' => 'アイコンは画像ファイルをアップロードしてください。'
    ]);

        $name = $request->input('name');
        $grade = $request->input('grade');
        $faculty_and_department = $request->input('faculty_and_department');
        $free_text = $request->input('free_text');
        $icon = $request->input('cropped_img');
        $path = null;
        
        if($icon != null){
            // $icon_delete = $user->icon;
            // dd($icon_delete);
            // $icon_delete = str_replace('storage/', 'public/', $icon_delete);
            
            // Storage::disk('public')->delete($icon_delete);
            $path =  $icon->store('public/images/profiles');
            $path = str_replace('public/', 'storage/', $path);
        }
        Auth::user()->update([
            'name' => $name,
            'grade' => $grade,
            'faculty_and_department' => $faculty_and_department,
            'free_text' => $free_text,
            'icon' => $icon,
        ]);

        // $profile = $request->all();
        // unset($profile['_token']);
        // $user->fill($profile)->save();
        session()->flash('flash_message', '変更しました');
        return view('/edit_user_info', compact('user'));
    }
}
