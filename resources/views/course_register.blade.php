@extends('layouts.app')

@section('content')
<div class="container">
    <h3>授業登録</h3>
    @if (session('flash_message'))
        <div class="alert alert-info" role="alert">
            <h5>{{ session('flash_message') }}</h5>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ url('/register') }}" method="POST">
        @csrf
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th scope="row">授業名</th>
                    <td>
                        <input name="name" type="text" class="form-control" value="{{old('name')}}" required>
                    </td>
                </tr>
                <tr>
                    <th scope="row">講義コード</th>
                    <td>
                        <input name="code" type="text" class="form-control" inputmode="numeric" value="{{old('code')}}" required>
                    </td>
                </tr>
                <tr>
                    <th scope="row">教員名</th>
                    <td>
                        <input name="teacher" type="text" class="form-control" value="{{old('teacher')}}" required>
                    </td>
                </tr>
                <tr>
                    <th scope="row">学部・専攻</th>
                    <td>
                        <input name="faculty" type="text" class="form-control" value="{{old('faculty')}}" required>
                    </td>
                </tr>
                <tr>
                    <th scope="row">年度</th>
                    <td>
                        <input name="year" type="number" class="form-control" min="2000" value="{{old('year')}}" required>
                    </td>
                </tr>
                <tr>
                    <th scope="row">学期</th>
                    <td>
                        <select name="term" class="form-select" required>
                            <option selected disabled value=""></option>
                            <option value="1" @if(old('term')=='1') selected @endif>通年</option>
                            <option value="2" @if(old('term')=='2') selected @endif>通年集中</option>
                            <option value="3" @if(old('term')=='3') selected @endif>前期</option>
                            <option value="4" @if(old('term')=='4') selected @endif>春学期</option>
                            <option value="5" @if(old('term')=='5') selected @endif>夏学期</option>
                            <option value="6" @if(old('term')=='6') selected @endif>前期集中</option>
                            <option value="7" @if(old('term')=='7') selected @endif>後期</option>
                            <option value="8" @if(old('term')=='8') selected @endif>秋学期</option>
                            <option value="9" @if(old('term')=='9') selected @endif>冬学期</option>
                            <option value="10" @if(old('term')=='10') selected @endif>後期集中</option>
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