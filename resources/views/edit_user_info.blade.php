@extends('layouts.app')

@section('content')
{{-- <link rel="stylesheet" href="croppie.css"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>

<div class="container">
    <h3>ユーザー情報編集</h3>
    @if (session('flash_message'))
        <div class="alert alert-info" role="alert">
            <h5>{{ session('flash_message') }}</h5>
        </div>
    @endif
    <form action="{{ url('/users_update'), $user->user }}" method="POST" enctype="multipart/form-data">
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
                        <div id="croppie-icon">
                        <input name="icon" type="file" class="" id="upload" value="" accept="image/*">
                        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Launch static backdrop modal
                        </button> --}}
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="hidden" id="cropped-img" name="cropped_img" value="">
        {{-- <input type="hidden" id="crop_x" name="crop_x" value="">
        <input type="hidden" id="crop_y" name="crop_y" value="">
        <input type="hidden" id="crop_width" name="crop_width" value="">
        <input type="hidden" id="crop_height" name="crop_height" value=""> --}}
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary btn-lg">登録</button>
        </div>
    </form>
    <button onclick="uploadAndCropImage()">Upload</button>
                        <button onclick="saveCropArea()">Save Crop Area</button>
        <p id="crop_msg" style="display: none">cropped!!</p>
</div>
{{-- <script src="croppie.js"></script> --}}
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
    var croppie;

// 画像のアップロードと表示
function uploadAndCropImage() {
  var fileInput = document.getElementById('upload');
  var file = fileInput.files[0];

  var reader = new FileReader();
  reader.onload = function (e) {
    var imageElement = document.createElement('img');
    imageElement.src = e.target.result;

    // Croppieインスタンスを作成し、画像を表示する要素を指定します
    var icon = document.getElementById('croppie-icon');
    croppie = new Croppie(icon, {
      viewport: { width: 200, height: 200, type: 'circle' },
      boundary: { width: 300, height: 300 }
    });

    croppie.bind({
      url: imageElement.src
    });
  };
  reader.readAsDataURL(file);
}

// 画像のクロップ
// function cropImage() {
//   croppie.result({
//     type: 'canvas',
//     size: {width: 90, height: 90 },
//     format: 'png',
//     circle: true
//   }).then(function (result) {
//     // クロップされた円形の画像データを取得し、必要な処理を行う
//     console.log(result);
//   });
// }

// var cropArea = {};

// 切り取り領域の保存
function saveCropArea() {
    let msg = document.getElementById('crop_msg');
    msg.style.display = 'block'
    $icon.croppie("result", {
        type: 'base64',
        size: {width:90, height:90},
        format: 'png',
    }).then(function(base64){
        $('#cropped-img').val(base64);
    });
//   var cropInfo = croppie.get();

//   // 切り取り領域の座標とサイズを保存
//   document.getElementById('crop_x').value = cropInfo.points[0];
//   document.getElementById('crop_y').value = cropInfo.points[1];
//   document.getElementById('crop_width').value = cropInfo.points[2] - cropInfo.points[0];
//   document.getElementById('crop_height').value = cropInfo.points[3] - cropInfo.points[1];
//   console.log('Crop area saved:', cropArea);
};
</script>
@endsection