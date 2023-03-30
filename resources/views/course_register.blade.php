@extends('layouts.app')

@section('content')
<div class="container">
    <h3>授業登録</h3>
    <form action="{{ url('/register') }}" method="POST">
        @csrf
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th scope="row">授業名</th>
                    <td>
                        <input name="name" type="text" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <th scope="row">講義コード</th>
                    <td>
                        <input name="code" type="text" class="form-control" inputmode="numeric" required>
                    </td>
                </tr>
                <tr>
                    <th scope="row">教員名</th>
                    <td>
                        <input name="teacher" type="text" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <th scope="row">学部・専攻</th>
                    <td>
                        <input name="faculty" type="text" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <th scope="row">年度</th>
                    <td>
                        <input name="year" type="number" class="form-control" min="2015" value="2023" required>
                    </td>
                </tr>
                <tr>
                    <th scope="row">学期</th>
                    <td>
                        <select name="term" class="form-select" required>
                            <option selected disabled value=""></option>
                            <option>通年</option>
                            <option>通年集中</option>
                            <option>前期</option>
                            <option>春学期</option>
                            <option>夏学期</option>
                            <option>前期集中</option>
                            <option>後期</option>
                            <option>秋学期</option>
                            <option>冬学期</option>
                            <option>後期集中</option>
                        </select>
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