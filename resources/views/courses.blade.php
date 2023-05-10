{{-- 授業詳細の画面レイアウト --}}
{{-- 仕様変更につき一応department追加 --}}
{{-- department=学部,faculty=学科 --}}
@extends('layouts.app')


@section('content')

    @foreach ($courses as $course)
    
        <div class="class-container">
            <div class="name" id="name">
                {{ $course-> name}}
            </div>

            <div class="name" id="teacher">
                {{ $course-> teacher}}
            </div>

            <div class="name" id="department">
                {{ $course-> department}}
            </div>

            <div class="name" id="faculty">
                {{ $course-> faculty}}
            </div>
            
        </div>
        <div class="button" {{ route('evaluation') }}>
            評価を見る
        </div>
    @endforeach    


@endsection


