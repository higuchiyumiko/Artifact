<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>検索結果</h1>
        <p>「{{$name}}」 というキーワードが含まれている商品</p>
        
        @forelse ($items as $item)
        <p>商品番号{{$item->id}}の「{{$item->Name}}」がヒットしました！</p>
        <a href='/posts/create/{{$item->id}}/'>「{{$item->Name}}」のレビュー投稿する</a><br>
        <p>新しく商品を登録してレビュー投稿する方はこちら</p>
        <a href='/posts/create/'>商品登録をする</a>
      @empty
        <p>No posts!!</p>
        <a href='/posts/create/'>商品登録をする</a>
      @endforelse
        
    </body>
</html>