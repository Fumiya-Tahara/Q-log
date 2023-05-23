{{-- 評価画面レイアウト --}}


@extends('layouts.app')


@section('content')

{{-- 評価データの変数。foreachでuseridごとに評価がみられるようにする。 --}}
    @foreach ($evaluations as $evaluation)
    
        <div class="evaluation-container">

        {{--生徒の事情を考えて一応匿名に --}}
    {{--          <div class="evaluation" id="user_name">
                ユーザー名: {{ $evaluation->user->name }}
            </div> --}}

            <div class="evaluation" id="review">
                評価:{{ $evaluation-> review}}
            </div>

            <div class="evaluation" id="sentence">
                コメント:{{ $evaluation-> sentence}}
            </div>

        {{-- 見やすく表示形式を変更 --}}

            <div class="evaluation" id="created_at">
                投稿日時:{{ $evaluation-> created_at->format('Y-m-d H:i:s')}}
            </div>

        </div>
    @endforeach

    
    <div class="evaluation-input">

        <form action="{{ route('evaluation.store') }}"  method="post">

                @csrf
                <textarea name="sentence" id="sentence" cols="30" rows="10" placeholder="評価を入力してください">
                    コメント:
                </textarea>

                <label for="review">評価(1-5):</label>

                <input type="number" id="review" name="review" min="1" max="5">
                {{-- レビュー用のバリデーション --}}
                @if ($errors->has('review'))
                    <div class="alert alert-danger">
                        @if ($errors->first('review') === 'The review must be a number.')
                            レビューの数値を適切に入力してください
                        @else
                            {{ $errors->first('review') }}
                        @endif
                    </div>
                @endif

                <div class="submmit">
                    <button type="submit" class="btn" >評価を投稿する</button>
                </div>
                
        </form>
    </div>

    
    
   



@endsection


