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
                        @foreach ($reviews as $reviews)
                    <p class='title'></p>
                    <div class='body'>
                        @foreach ($items as $items) 
                        @if ($items->id=== $reviews->item_id)
                            <p>商品名：{{$items->Name}}</p>
                        @endif
                            <p></p>
                        @endforeach
                        <p>タイトル：{{ $reviews->Title }}</p>
                        <img src="{{ $items->Item_image }}" alt="画像が読み込めません。"/>
                        <p>コメント：{{$reviews->Body}}</p>
                        <p>★：{{$reviews->Review_score}}</p>
            @endforeach
=======
           
                   
        </div>
      
    </body>
</html>