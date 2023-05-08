{{-- 授業評価用の画面レイアウト --}}
{{-- 仕様変更につき一応department追加 --}}
{{-- department=学部,faculty=学科 --}}
@extends('layouts.app')


@section('content')

    @foreach ($evaluations as $eval)
        <div class="eval-container">
            <div class="sentence" id="sentence">
                {{ $eval-> sentence}}
            </div>

            <div class="review" id="review">
                {{ $course-> review}}
            </div>

        </div>



@endsection


