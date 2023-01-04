<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>お土産品口コミサイト</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{secure_asset('/assets/css/app.css')}}">
    </head>
    <body>
      <div class="title_area">
        <h1 class="title">お土産品口コミサイト</h1>
        <p class="subtitle">ーお気に入りの一品を<br>         みつけようー</p>
      </div>
      <div class="main">
        <h2><a href="/post/">口コミを投稿したいお土産品を探す</a></h2>
        
        <a href='/posts/show'>登録されている商品の一覧を見る</a>
        
        <h2>最新の口コミ↓</h2>
        <div class='review'>
             
            
             @foreach ($review as $reviews)
             @foreach ($items as $Item) 
                        
                        @if ($Item->id=== $reviews->item_id)
                            <p>商品名：{{$Item->Name}}</p>
                            @if($Item->Item_image!=null)
                                <img src="{{ $Item->Item_image }}" alt="画像が読み込めません。"/>
                            @endif
                                <p></p>
                        @endif
                            <p></p>
            @endforeach
                    <div class='body'>
                        <p>タイトル：{{ $reviews->Title }}</p>
                        <a href="/posts/show/{{ $reviews->id }}">この口コミを見る</a><br><br>
            @endforeach    
                    </div>
        </div>
      </div>
            <div class='paginate'>
            {{ $review->links() }}
            </div>
    </body>
</html>