<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>写真館＿１</title>
    <p>あなたの思い出に残る風景をアップロードしてみよう</p>
    <h1>画像をアップロードする</h1>
    <form method = "POST" action="report/" enctype="multipart/form-data">
        @csrf
    <input type = "file" name="profile_img">
    <input type="submit">
    @if ($errors -> any())
    <div class = "alert alert-danger">
        <ul>
            @foreach ($errors -> all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
</head>
<body>

</body>
</html>
