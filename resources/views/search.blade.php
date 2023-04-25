<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

@extends('layouts.app')

@section('content')
<p>検索結果</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">講義名</th>
      <th scope="col">担当教員</th>
      <th scope="col">開講期間 曜日・時限</th>
      <th scope="col">評価</th>
    </tr>
  </thead>
  <tbody>
@forelse ($posts as $post)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td><a href="{{ route('posts.show' , $post) }}">{{ $post->name }}</td></a>
      <td>{{ $post->teacher }}</td>
      <td>{{$post->term}}</td>
      <td>{{$post->average_review}}</td>
    </tr>
  @empty
    <td>No posts!!</td>
  @endforelse
  </tbody>
@endsection