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

    
        $result = Evaluation::create([
            'sentence' => $request->input('sentence'),
            'review' => $request->input('review'),
            // 'course_id' => $request->input('course_id'),
            'course_id' => $evaluations->('course_id'),
            'user_id' => auth()->id(),
        ]);
    
        return redirect()->route('evaluation.index', ['course_id' => $request->input('course_id')]);
    }
    
}
