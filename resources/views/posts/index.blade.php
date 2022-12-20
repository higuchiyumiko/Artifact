<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
    <body>
        <h1><a href="/post/">おみやげ品レビューサイト</a></h1>
        
        <a href='/posts/show'>商品一覧</a>
        
        <h2>商品</h2>
        <p>最新の口コミ</p>
        <div class='review'>
            
            @foreach ($review as $review)
                    <p class='title'></p>
                    <div class='body'>
                         <a href="/posts/show/{{ $review->item_id }}">この口コミを見る</a>
                        @foreach ($items as $items) 
                        @if ($items->id=== $review->item_id)
                            <p>{{$items->Name}}</p>
                        @endif
                            <p></p>
                        @endforeach
                        <p>タイトル：{{ $review->Title }}</p>
                        
                    </div>
                </div>
            
            @endforeach
        
        
    </body>
</html>