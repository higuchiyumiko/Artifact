<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>レビュー編集画面</h1>
            <div class="content">
                @foreach ($items as $item)
                    @if ($data->item_id==$item->id)
                    <p class='title'>商品名：{{$item->Name}}</p>
                    @else
                    <p></p>
                    @endif
                    @endforeach
                    
                
            <form action="/review/{{ $data->id }}/update" method="POST">
                @csrf
                @method('PUT')
                <div class='content__title'>
                    <h2>商品名  {{ $data->Name }}</h2>
                </div>
                <div class='content__body'>
                    　<input type='hidden' name='item[Name]' value="{{$data->Name}}">
                    <h3>販売会社名</h3>
                     <input type='text' name='item[Market_name]' value="{{ $data->Market_name }}">
                    <h3>アレルギー</h3>
                     <input type='text' name='item[Allergy]' value="{{ $data->Allergy }}">
                    
                    <h3>カテゴリー</h3>
                        <input class="form-check-input" type="radio" id="radio01" name="item[category_id]" value="1"> 
                        <label class="form-check-label" for="category">お菓子</label>
                        <input class="form-check-input" type="radio" id="radio02" name="item[category_id]" value="2"> 
                        <label class="form-check-label" for="category">加工品</label>
                        <input class="form-check-input" type="radio" id="radio03" name="item[category_id]" value="3"> 
                        <label class="form-check-label" for="category">飲み物</label>
                        <input class="form-check-input" type="radio" id="radio04" name="item[category_id]" value="4"> 
                        <label class="form-check-label" for="category">パン</label>
                        <input class="form-check-input" type="radio" id="radio05" name="item[category_id]" value="5"> 
                        <label class="form-check-label" for="category">麺類</label>
                        <input class="form-check-input" type="radio" id="radio06" name="item[category_id]" value="6"> 
                        <label class="form-check-label" for="category">調味料</label>
                        <input class="form-check-input" type="radio" id="radio07" name="item[category_id]" value="7"> 
                        <label class="form-check-label" for="category">その他</label>
                </div><br>
                <input type="submit" value="保存">
            </form>
        　　</div>
    </body>
</html>