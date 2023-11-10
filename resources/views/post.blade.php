<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>post</title>
</head>
<body>
    <div>
        <h1>Post Index</h1>
        @foreach ($posts as $post)
            <div>
                <p>no. {{ $post->id }}</p>
                <p>user: {{ $post->user->name }}</p>
                <p>title: {{ $post->title }}</p>
                <p>content: {{ $post->content }}</p>
                <hr>
            </div>
        @endforeach
    </div>
</body>
</html>
