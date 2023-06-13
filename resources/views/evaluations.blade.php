{{-- 評価画面レイアウト --}}


@extends('layouts.app')


@section('content')

{{-- 評価データの変数。foreachでuseridごとに評価がみられるようにする。 --}}
{{-- <div class="evaluation-input">

    <form action="{{ route('evaluation.store') }}"  method="post">

            @csrf
            <textarea name="sentence" id="sentence" cols="30" rows="10" placeholder="評価を入力してください">
                コメント:
            </textarea>

            <label for="review">評価(1-5):</label>

            <input type="number" id="review" name="review" min="1" max="5">
            {{-- レビュー用のバリデーション 
            
            @if ($errors->has('review'))
                <div class="alert alert-danger">
                    @error('review')
                        レビューの数値を適切に入力してください
                    @enderror
                </div>
            @endif --}}

            <div class="container">
                <h3>評価投稿</h3>

                <form action="{{ route('evaluation.store') }}"  method="post">
                    @csrf
                    {{-- <input type="hidden" name="_method" value="PUT"> --}}
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>
                                    <p>コメント:</p>
                                    <textarea name="sentence" id="sentence" cols="150" rows="5" placeholder="評価を入力してください"></textarea>
                                    @if ($errors->has('review'))
                                        <div class="alert alert-danger">
                                            @error('review')
                                                レビューの数値を適切に入力してください
                                            @enderror
                                        </div>
                                    @endif
                        </th>
                            <tr>
                            <tr>
                                <th scope="row"><label for="review">評価(1-5):</label>
                                <input type="number" id="review" name="review" min="1" max="5"></th>
                        </tbody>
                    </table>
                    <input type="hidden" id="cropped-img" name="cropped_img" value="">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">評価を投稿</button>
                </form>
              
            </div>
            
    </form>
</div>

    
        <div class="evaluation-container">
            {{-- @foreach($evaluations as $evaluation) --}}
                    <table class="table table-bordered">
                        <tbody>
                           
                            <tr>
                                <th scope="row">ユーザー名</th>
                                <td>
                                    <div class="evaluation" id="user_name">
                                        ユーザー名: {{ $evaluations->user->name }}
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">評価</th>
                                <td>
                                    <div class="evaluation" id="sentence">
                                        {{ $evaluations-> sentence}}
                                    </div>
                                </td>
                                
                            </tr>

                            <tr>
                                <th scope="row">投稿時間</th>
                                <td>
                                    <div class="evaluation" id="created_at">
                                        投稿日時:{{ $evaluations->created_at->format('Y-m-d H:i:s')}}
                                    </div>
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                    {{-- @endforeach --}}
        </div>
            
       

@endsection


