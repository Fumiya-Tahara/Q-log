<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use Dotenv\Validator;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\Evaluation;
use App\Models\Course;

class EvaluationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($course_id)
    {
        // 作成された順に授業のidごとに整理して表示する。
        $evaluations = Evaluation::where('course_id', $course_id)
        
        // 投稿日時を整理して表示する。
                        ->getAllOrderByUpdated_at()
                        ->get();
                        

        return view("evaluations", compact('evaluations'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'review' => ['required'],
            'sentence' => ['required']

        ]);
    
        // バリデーションエラーがある場合はリダイレクトする
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $result = Evaluation::create($request->all());

        // evaluation.indexにリクエスト送信（その授業の評価一覧ページに移動）

        return redirect()->route('evaluation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       //    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
