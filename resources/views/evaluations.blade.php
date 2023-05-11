{{-- 評価画面レイアウト(本来担当ではないのですが具体的なイメージ用に作っています) --}}
{{-- 仕様変更につき一応department追加 --}}
{{-- department=学部,faculty=学科 --}}

@extends('layouts.app')


@section('content')

{{-- 評価データの変数 --}}
    @foreach ($evaluations as $evaluation)
    
        <div class="evaluation-container">

            <div class="evaluation" id="evaluation">
                {{ $evaluation-> review}}
            </div>

            <div class="evaluation" id="sentence">
                {{ $evaluation-> sentence}}
            </div>

            <div class="evaluation" id="created_at">
                {{ $evaluation-> created_at}}
            </div>

        </div>
    @endforeach

    
    <div class="evaluation-input">

        <form action="route{{ 'evaluation.store' }}" method="post">

                @csrf
                <textarea name="sentence" id="sentence" cols="30" rows="10" placeholder="評価を入力してください">
                    コメント
                </textarea>

                <select name="review">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3" selected>3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <!-- 他のオプションを追加 -->
                </select>

                <div class="submmit">
                    <button type="button" class="btn" >評価する</button>
                </div>
                
        </form>
    </div>

    
    
   



@endsection


