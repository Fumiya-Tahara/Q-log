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
      <td><a href="{{ route('posts.show' , $post) }}">{{ $post->name }}</td></a>
      <td>{{ $post->teacher }}</td>
    </tr>
  @empty
    <td>No posts!!</td>
  @endforelse
</table>
<div>
  <h1>基幹教育</h1>
  <h2>言語文化科目</h2>
  <h2>文系ディシプリン科目</h2>
  <h2>理系ディシプリン科目</h2>
  <h2>サイバーセキュリティ科目</h2>
  <h2>健康・スポーツ科目</h2>
  <h2>総合科目</h2>
  <h2>高年次基幹教育科目</h2>
</div>
<div>
  <h1>専攻教育</h1>
</dev>
@endsection