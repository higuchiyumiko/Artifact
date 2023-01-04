<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>レビュー詳細画面</h1>
        <div class='items'>
           
                    @foreach ($items as $item)
                    @if ($data->item_id==$item->id)
                    <p class='title'>商品名：{{$item->Name}}</p>
                    @else
                    <p></p>
                    @endif
                    @endforeach
                    <div class='body'>
                        <p>タイトル：{{$data->Title}}</p>
                        <p>口コミ内容：{{$data->Body}}</p>
                        <p>★：{{$data->Review_score}}</p>
                        <!-- 投稿日 2022/12/25 のようにできればいれたい>
                   
        </div>
      
    </body>
</html>