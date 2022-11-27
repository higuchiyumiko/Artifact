<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>
                @if($post->sex==1)
                <p class='sex'>女</p>
                @else
                <p class='sex'>男</p>
                @endif
                <p class='review1'>{{$post->review1}}</p>
                <p class='review2'>{{$post->review2}}</p>
                <p class='review3'>{{$post->review3}}</p>
                <p class='review4'>{{$post->review4}}</p>
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>