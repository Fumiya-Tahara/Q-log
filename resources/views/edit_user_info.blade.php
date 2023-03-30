@extends('layouts.app')

@section('content')
<div class="container">
    <h3>ユーザー情報編集</h3>
    <form>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th scope="row">ユーザー名</th>
                    <td>
                        <input type="text" class="form-control" value="" required>
                    </td>
                </tr>
                <tr>
                    <th scope="row">メールアドレス</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">パスワード</th>
                    <td>
                        <input type="password" class="form-control" value="" required>
                    </td>
                </tr>
                <tr>
                    <th scope="row">パスワード （確認用）</th>
                    <td>
                        <input type="password" class="form-control" value="" required>
                    </td>
                </tr>
                <tr>
                    <th scope="row">学年</th>
                    <td>
                        <input type="text" class="form-control" value="">
                    </td>
                </tr>
                <tr>
                    <th scope="row">学部・専攻</th>
                    <td>
                        <input type="text" class="form-control" value="">
                    </td>
                </tr>
                <tr>
                    <th scope="row">アイコン</th>
                    <td>
                        <input type="text" class="form-control" value="">
                    </td>
                </tr>
                <tr>
                    <th scope="row">free text</th>
                    <td>
                        <input type="text" class="form-control" value="">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary btn-lg">登録</button>
        </div>
    </form>
</div>
@endsection