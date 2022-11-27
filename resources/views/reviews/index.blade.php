<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Souvenir Review</h1>
        <div class='reviews'>
            @foreach($category as $category)
            <div class='post'>
                <h2 class='id'><a href="/posts/{{$category->id}}">{{$category->id}}</a></h2>
                <p class='Name'>{{$category->Name}}</p>
                
            </div>
            @endforeach
        </div>
        
    </body>
</html>