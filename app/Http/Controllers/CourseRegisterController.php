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
        $name = $request['name'];
        $code = $request['code'];
        $teacher = $request['teacher'];
        $faculty = $request['faculty'];
        $year = $request['year'];
        $term = $request['term'];
        Course::create([
            'name' => $name,
            'lecture_code' => $code,
            'teacher' => $teacher,
            'faculty' => $faculty,
            'year' => $year,
            'term' => $term,
        ]);
        return view('/home');
    }
}
