<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\Evaluation;
use App\Models\Course;


class EvaluationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $course = Course::findOrFail($id);  
        //忘れてた
        
        $evaluations = Evaluation::findOrFail($course->id);
        // dd($evaluations);  
    
        return view("evaluations", compact('evaluations'));
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'review' => ['required'],
            'sentence' => ['required']
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        // ユーザーが入力する部分
        $result = Evaluation::create([
            'sentence' => $request->input('sentence'),
            'review' => $request->input('review'),
            'user_id' => auth()->id(),
        ]);
        // course_idをマージして使えるようにすると行けるか？
        
        $data = $request->merge(['course_id' => Course::create()->id])->all();
    
        return redirect()->route('evaluation.index',[ $data => 'course_id']);
    }
    
}
