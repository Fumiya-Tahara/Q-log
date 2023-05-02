{{-- 授業評価用の画面レイアウト --}}
@extends('layouts.app')



@foreach ($classes as $class)

@section('content')
<div class="class-container">
    <div class="name" id="name">
        {{ $class-> name}}
    </div>

    <div class="name" id="teacher">
        {{ $class-> teacher}}
    </div>
    
    <div class="name" id="faculty">
        {{ $class-> faculty}}
    </div>
</div>

@endsection

    
@endforeach
