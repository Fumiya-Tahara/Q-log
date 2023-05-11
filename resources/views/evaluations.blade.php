{{-- 評価画面レイアウト(本来担当ではないのですが具体的なイメージ用に作っています) --}}
{{-- 仕様変更につき一応department追加 --}}
{{-- department=学部,faculty=学科 --}}

@extends('layouts.app')


@section('content')

{{-- 評価データの変数 --}}
    @foreach ($evaluations as $evaluation)
    
        <div class="eval-container">

            <div class="review" id="review">
                {{ $evaluation-> review}}
            </div>

            <div class="review" id="review">
                {{ $evaluation-> sentence}}
            </div>

            <div class="review" id="review">
                {{ $evaluation-> sentence}}
            </div>

        </div>



@endsection


