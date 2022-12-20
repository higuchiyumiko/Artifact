<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>商品</h1>
        <div class='items'>
            @foreach ($items as $items)
                    <p class='title'>{{ $items->id }}</p>
                    <div class='body'>
                        <p>商品名：{{ $items->Name }}</p>
                        <p>販売会社：{{$items->Market_name}}</p>
                    </div>
                </div>
            @endforeach
        </div>
      
    </body>
</html>