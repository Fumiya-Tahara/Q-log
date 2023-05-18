@extends('layouts.app')

@section('content')
<div class="container">
    <h3>ユーザー情報編集</h3>
    <form action="{{ url('/users_update'), $user->user }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th scope="row">ユーザー名</th>
                    <td>
                        <input name="name" type="text" class="form-control" value="{{ $user->name }}" required>
                    </td>
                </tr>
                <tr>
                    <th scope="row">メールアドレス</th>
                    <td>{{ $user->email }}</td>
                </tr>
                {{-- <tr>
                    <th scope="row">パスワード</th>
                    <td>
                        <input type="password" class="form-control" value="{{ $user->password }}" required>
                    </td>
                </tr>
                <tr>
                    <th scope="row">パスワード （確認用）</th>
                    <td>
                        <input type="password" class="form-control" value="{{ $user->password }}" required>
                    </td>
                </tr> --}}
                <tr>
                    <th scope="row">学年</th>
                    <td>
                        <input name="grade" type="text" class="form-control" value="{{ $user->grade }}">
                    </td>
                </tr>
                <tr>
                    <th scope="row">学部・専攻</th>
                    <td>
                        <input name="faculty_and_department" type="text" class="form-control" value="{{ $user->faculty_and_department }}">
                    </td>
                </tr>
                <tr>
                    <th scope="row">free text</th>
                    <td>
                        <input name="free_text" type="text" class="form-control" value="{{ $user->free_text }}">
                    </td>
                </tr>
                <tr>
                    <th scope="row">アイコン</th>
                    <td>
                        <input name="icon" type="file" class="form-control" id="formFile" value="{{ $user->icon }}">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary btn-lg">登録</button>
        </div>
    </form>
</div>
<script src="croppie.js"></script>
@endsection