@extends('layouts.app')

@section('content')
<!-- //* 検索機能ここから *// -->
<div>
  <form action="{{ route('posts.index') }}" method="GET">
    <input type="text" name="keyword" value="{{ $keyword }}">
    <input type="submit" value="検索">
  </form>
</div>
<!-- //*検索機能ここまで*// -->

<h1>
  <span>授業一覧</span>
  <a href="{{ route('posts.create') }}">[Add]</a>
</h1>

<table>
  <tr>
    <th>教授名</th><th>教授名</th>
  </tr>

<!-- //* 保存されているレコードを一覧表示*// -->
  @forelse ($posts as $post)
    <tr>
      <td><a href="{{ route('posts.show' , $post) }}">{{ $post->title }}</td></a>
      <td>{{ $post->author }}</td>
    </tr>
  @empty
    <td>No posts!!</td>
  @endforelse
</table>
@endsection