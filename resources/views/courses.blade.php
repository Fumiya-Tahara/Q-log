{{-- 授業評価用のコース画面レイアウト(本来担当ではないのですが画面遷移の具体的なイメージ用に作っています) --}}
{{-- 仕様変更につき一応department追加 --}}
{{-- department=学部,faculty=学科 --}}
{{-- 現状の仕様は学部→学科→科目　と絞るか? --}}

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


