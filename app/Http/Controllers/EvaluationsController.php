<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\Evaluation;
use App\Models\Course;
use Auth;


class EvaluationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        // とりあえずコースをidごとに取得
        $course = Course::findOrFail($id);  

        // course_idに応じて評価をリスト形式で取得

        $evaluations = Evaluation::where('course_id', $course->id)->get();  
    
        return view("evaluations", compact('evaluations','course'));
    }
    
    public function store(Request $request)
    {
        //user_idがなしの時に
        if (Auth::guest()) {
            $request->session()->flash('error', 'アカウント作成・またはログインしてください');

            return redirect('login');
        }

        // validationを設定。reviewと数値を必須に。
        $validator = Validator::make($request->all(), [
            'review' => ['required'],
            'sentence' => ['required']
        ]);

        //一応エラー出す
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $result = Evaluation::create([
            'sentence' => $request->input('sentence'),
            'review' => $request->input('review'),
            'course_id' => $request->input('course_id'),
            'user_id' => auth()->id(),
        ]);
        
    return redirect()->route('evaluation.index', ['course_id' => $request->input('course_id')])
    ->with('flash_message', '投稿が完了しました');

    }
    
    


}
