@extends('layouts.app')

@section('content')
<!-- Croppie -->
<link rel="stylesheet" href="croppie.css">

<div class="container">
    <h3>ユーザー情報</h3>
    <div class="d-flex justify-content-evenly">
        <div class="flex-shrink-0">
            <img src={{ url('storage/images/profiles/blank-profile-picture-gbf03f3328_640.png') }} style="width: 100px; height: 100px;">
        </div>
        <div class="flex-grow-1 ms-3">
            <h2>{{ $user->name }}</h2>
        </div>
    </div>
    <table class="table table-bordered">
        <tbody>
            {{-- <tr>
                <th scope="row">ユーザー名</th>
                <td>{{ $user->name }}</td>
            </tr> --}}
            {{-- <tr>
                <th scope="row">メールアドレス</th>
                <td>{{ $user->email }}</td>
            </tr> --}}
            <tr>
                <th scope="row">学年</th>
                <td>{{ $user->grade }}</td>
            </tr>
            <tr>
                <th scope="row">学部・専攻</th>
                <td>{{ $user->faculty_and_department }}</td>
            </tr>
            <tr>
                <th scope="row">free text</th>
                <td>{{ $user->free_text }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection