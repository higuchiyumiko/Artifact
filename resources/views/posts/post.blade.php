<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>検索</h1>
        @csrf
         <form action="/posts/post" 　method="GET">
            <input type="text" name="name" value="">
            <input type="submit" value="検索">
         </form>
        
        
        
    </body>
</html>