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
            @foreach ($items as $item)
                    <p class='title'>{{ $item->id }}</p>
                    <div class='body'>
                        <p>商品名：{{ $item->Name }}</p>
                        <div>
                           <img src="{{ $item->Item_image }}" alt="画像が読み込めません。"/>
                        </div>
                        <p>販売会社：{{$item->Market_name}}</p>
                        <div class="edit"><a href="/review/{{ $item->id }}/edit">この商品を編集する</a></div><br>
                        <form action="/review/{{ $item->id }}/delete" id="form_{{ $item->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deletePost({{ $item->id }})">この商品を削除する</button> 
                        </form>
            @endforeach
                    </div>
                </div>
                 <script>
                            function deletePost(id) {
                                'use strict'
                        
                                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                                    document.getElementById(`form_${id}`).submit();
                                }
                            }
                 </script>
        </div>
      
    </body>
</html>