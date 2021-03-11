<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>写真館</title>
</head>
<body>
    <p>あなたの心に残る景色を共有しよう</p>
    <form method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <p>題名<br><input type="text" name="title" size="50"></p>
        <p>本文<br><textarea name="body" cols="50" rows="8"></textarea></p>
        <p>添付<br><input type="file" name="files[]" multiple></p>
        <button>投稿</button>
    </form>
    @foreach ($posts as $post)
        <hr>
        <p>{{ $post->title }}</p>
        <pre>{{ $post->body }}</pre>
        <p>
            @foreach ($post->pictures as $picture)
                <img src="{{ 'storage/' . $picture->filename }}">
            @endforeach
        </p>
        <blockquote>
            @foreach ((array)$post->comments as $comment)
                <pre>{{ $comment->body }}</pre>
                <p>@foreach ((array)$comment->pictures as $picture)
                    <img src="{{ 'storage/' . $picture->filename　}}">
                @endforeach
            </p>
        @endforeach
{{--        <form method="post" action="{{ url('report/piccomments') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <p>コメント<br><textarea name="body" cols="50" rows="3"></textarea></p>
            <p>添付<br><input type="file" name="files[]" multiple></p>
            <input type="hidden" name="post_id" value="{{ $post->id }}">
                <button>コメント投稿</button>
            </form>
 --}}        </blockquote>
    @endforeach
</body>
</html>
