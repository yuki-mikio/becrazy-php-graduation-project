<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>記事</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .flex-center {
            align-items: center;
            margin: 100px 300px 100px 300px;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }
    </style>
</head>
<body>
    <div class="flex-center position-ref">
        <h1>{{ $read->title }}</h1>
            {!! $read->content !!}
        
            <dl>
                <dt>カテゴリー</dt>
                 @foreach ($category as $category)
                <a href="http://localhost:8000/category/{{$category->slug}}">
                    {{ $category->name }}
                </a>
                @endforeach
            </dl>
            <dl>
                <dt>タグ</dt>
                @foreach ($tags as $tag)
                <a href="http://localhost:8000/category/{{$tag->slug}}">
                    {{ $tag->name }}
                </a>
                @endforeach
            </dl>
        </form>
    </div>
</body>
</html>