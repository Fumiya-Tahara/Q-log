<head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{ asset('/css/courses.css') }}">
</head>

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

@extends('layouts.app')

@section('content')
<p ><a class="link-primary" class="tab-item{{ Request::is('favorite_courses') ? ' active' : ''}}" href="{{ route('favorites') }}">お気に入り一覧</a></p>
<!-- //* 検索機能ここから *// -->
<div>
  <form action="{{ route('posts.index') }}" method="GET">
  @csrf
    <input type="text" name="keyword" value="{{ $keyword }}">
    <input type="submit" value="検索">
  </form>
</div>
<!-- //*検索機能ここまで*// -->
<!-- なぜ -->

<div>
  <h1 class="btn btn-primary" type="button" data-toggle="collapse" data-target="#kikan" aria-expanded="false" aria-controls="collapseExample">
    基幹教育
  </h1>
  <div class="collapse" id="kikan">
  <ul>
  <li>
    <form action="{{ route('posts.index') }}" method="GET">
    @csrf
    <input type="hidden" name="keyword" value="言語文化科目">
    <input class="btn btn-secondary" type="submit" value="言語文化科目">
    </form>
  </li>
  <li>
    <form action="{{ route('posts.index') }}" method="GET">
    @csrf
    <input type="hidden" name="keyword" value="文系ディシプリン科目">
    <input class="btn btn-secondary" type="submit" value="文系ディシプリン科目">
    </form>
  </li>
  <li>
    <form action="{{ route('posts.index') }}" method="GET">
    @csrf
    <input type="hidden" name="keyword" value="理系ディシプリン">
    <input class="btn btn-secondary" type="submit" value="理系ディシプリン">
    </form>
  </li>
  <li>
    <form action="{{ route('posts.index') }}" method="GET">
    @csrf
    <input type="hidden" name="keyword" value="サイバーセキュリティ科目">
    <input class="btn btn-secondary" type="submit" value="サイバーセキュリティ科目">
    </form>
  </li>
  <li>
    <form action="{{ route('posts.index') }}" method="GET">
    @csrf
    <input type="hidden" name="keyword" value="健康・スポーツ科目">
    <input class="btn btn-secondary" type="submit" value="健康・スポーツ科目">
    </form>
  </li>
  <li>
    <form action="{{ route('posts.index') }}" method="GET">
    @csrf
    <input type="hidden" name="keyword" value="総合科目">
    <input class="btn btn-secondary" type="submit" value="総合科目">
    </form>
  </li>
  <li>
    <form action="{{ route('posts.index') }}" method="GET">
    @csrf
    <input type="hidden" name="keyword" value="高年次基幹教育科目">
    <input class="btn btn-secondary" type="submit" value="高年次基幹教育科目">
    </form>
  </li>
  </ul>
  </div>
</div>
<div>
  <h1 class="btn btn-primary" type="button" data-toggle="collapse" data-target="  " aria-expanded="false" aria-controls="collapseExample">
    専攻教育
  </h1>
</dev>
@endsection