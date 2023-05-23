@extends('layouts.app')
@section('content')
<h1 class="page-heading">お気に入り授業</h1>
<p>検索結果</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">講義コード</th>
      <th scope="col">講義名</th>
      <th scope="col">担当教員</th>
      <th scope="col">開講期間 曜日・時限</th>
      <th scope="col">評価</th>
      <th scope="col">年</th>
      <th scope="col">学部</th>
      <th scope="col">科目</th>
      <th scope="col">登録</th>      
    </tr>
  </thead>
  <tbody>
@forelse ($posts as $post)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$post->lecture_code}}</td>
      <td>{{ $post->name }}</td></a>
      <td>{{ $post->teacher }}</td>
      <td>{{$post->term}}</td>
      <td>{{$post->average_review}}</td>
      <td>{{$post->year}}</td>
      <td>{{$post->faculty}}</td>
      <td>{{$post->subject}}</td>
      <td>@if (!$post->id)
        <form action="{{ route('Favorite.store', $post) }}" method="post">
            @csrf
            <button>お気に入り登録</button>
        </form>
        @else
        <form action="{{ route('Favorite.destroy', $post) }}" method="post">
            @csrf
            @method('delete')
            <button>お気に入り解除</button>
        </form>
        @endif
      </td>
    </tr>
  @empty
    <td>No posts!!</td>
    
  @endforelse
  </tbody>
  
  {{ $posts->links() }}
@endsection()