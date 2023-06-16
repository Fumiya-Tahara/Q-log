{{-- 評価画面レイアウト --}}


@extends('layouts.app')


@section('content')

            <div class="container">
                <h3>評価投稿</h3>

                <form action="{{ route('evaluation.store', ['course_id' => $course->id]) }}"  method="post">
                    @csrf

                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>
                                    <p>コメント:</p>
                                    <textarea name="sentence" id="sentence" cols="150" rows="5" placeholder="評価を入力してください"></textarea>
                        </th>
                            <tr>
                            <tr>
                                <th scope="row"><label for="review">評価(1-5):</label>
                                <input type="number" id="review" name="review" min="1" max="5"></th>
                        </tbody>
                    </table>
                    <input id="course_id" name="course_id" type="hidden" value="{{ $course->id }}">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">評価を投稿</button>
                </form>
              
            </div>
            
    </form>
</div>

            @foreach ($evaluations as $evaluation)
                <div class="evaluation-container">
                            <table class="table table-bordered">
                                <tbody>
                                
                                    <tr>
                                        <th scope="row">ユーザー名</th>
                                        <td>
                                            <div class="evaluation" id="user_name">
                                                ユーザー名: {{ $evaluation->user->name }}
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">コメント</th>
                                        <td>
                                            <div class="evaluation" id="sentence">
                                                {{ $evaluation-> sentence}}
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">評価</th>
                                        <td>
                                            <div class="evaluation" id="review">
                                                {{ $evaluation-> review}}
                                            </div>
                                        </td>
                                        
                                    </tr>

                                    <tr>
                                        <th scope="row">投稿時間</th>
                                        <td>
                                            <div class="evaluation" id="created_at">
                                                投稿日時:{{ $evaluation->created_at->format('Y-m-d H:i:s')}}
                                            </div>
                                        </td>
                                    </tr>
                                
                                </tbody>
                            </table>
                </div>
            @endforeach
</div>       
      
       

@endsection


