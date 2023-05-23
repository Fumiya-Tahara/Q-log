<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseRegisterController extends Controller
{
    public function index() {
        return view('course_register');
    }

    public function create(Request $request) {
        $request->validate([
            'name' => 'required',
            'code' => 'required|numeric|min_digits:8|max_digits:8',
            'teacher' => 'required',
            'faculty' => 'required',
            'year' => 'required|numeric|min_digits:4|max_digits:4',
            'term' => 'required',
        ],
    [
        'name.required' => '授業名は必須です。',
        'code.required' => '講義コードは必須です。',
        'code.numeric' => '講義コードは半角数字で入力してください。',
        'code.min_digits' => '講義コードは8桁で入力してください。',
        'code.max_digits' => '講義コードは8桁で入力してください。',
        'teacher.required' => '教員名は必須です。',
        'faculty.required' => '学部・専攻は必須です。',
        'year.required' => '年度は必須です。',
        'year.numeric' => '年度は半角数字で入力してください。',
        'year.min_digits' => '年度は4桁で入力してください。',
        'year.max_digits' => '年度は4桁で入力してください。',
        'term.required' => '学期は必須です。',
    ]);
        $name = $request['name'];
        $code = $request['code'];
        $teacher = $request['teacher'];
        $faculty = $request['faculty'];
        $year = $request['year'];
        $term = $request['term'];

        $exist = Course::whereLecture_code($code)->first();
        if($exist){
            session()->flash('flash_message', '既に登録されています');
            return view('/course_register');
        }
        else{
            Course::create([
                'name' => $name,
                'lecture_code' => $code,
                'teacher' => $teacher,
                'faculty' => $faculty,
                'year' => $year,
                'term' => $term,
            ]);
            session()->flash('flash_message', '登録が完了しました');
            return view('/course_register');
        }
    }
}
