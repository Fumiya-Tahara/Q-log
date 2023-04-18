@extends('layouts.app')

@section('content')
<div class="container">
    <h3>ユーザー情報</h3>
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th scope="row">ユーザー名</th>
                <td>{{ $name }}</td>
            </tr>
            <tr>
                <th scope="row">メールアドレス</th>
                <td>{{ $mail }}</td>
            </tr>
            <tr>
                <th scope="row">学年</th>
                <td>{{ $grade }}</td>
            </tr>
            <tr>
                <th scope="row">学部・専攻</th>
                <td>{{ $faculty }}</td>
            </tr>
            <tr>
                <th scope="row">アイコン</th>
                <td>{{ $icon }}</td>
            </tr>
            <tr>
                <th scope="row">free text</th>
                <td>{{ $text }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection