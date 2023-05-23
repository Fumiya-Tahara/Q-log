<head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{ asset('/css/courses.css') }}">
</head>

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

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

<div>
  <h1 class="btn btn-primary" type="button" data-toggle="collapse" data-target="#kikan" aria-expanded="false" aria-controls="collapseExample">
    基幹教育
  </h1>
  <div class="collapse" id="kikan">
  <ul>
  <li type="button" class="btn btn-secondary">言語文化科目</li>
  <li type="button" class="btn btn-secondary">文系ディシプリン科目</li>
  <li type="button" class="btn btn-secondary">理系ディシプリン科目</li>
  <li type="button" class="btn btn-secondary">サイバーセキュリティ科目</li>
  <li type="button" class="btn btn-secondary">健康・スポーツ科目</li>
  <li type="button" class="btn btn-secondary">総合科目</li>
  <li type="button" class="btn btn-secondary">高年次基幹教育科目</li>
  </ul>
  </div>
</div>
<div>
  <h1 class="btn btn-primary" type="button" data-toggle="collapse" data-target="#kikan" aria-expanded="false" aria-controls="collapseExample">
    専攻教育
  </h1>
</dev>
@endsection