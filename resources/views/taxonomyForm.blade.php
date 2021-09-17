<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>カテゴリ･タグ追加</title>

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
        <h1>カテゴリ･タグ追加フォーム</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST">
            @csrf
            <dl>
                <dt>名前</dt>
                <dd><input type="text" name="name" required value="{{ old('name') }}"></dd>
            </dl>
            <dl>
                <dt>タイプ</dt>
                <input type="radio" name="type" value="category">カテゴリ
                <input type="radio" name="type" value="tag" checked="checked">タグ
            </dl>
            <dl>
                <dt>スラッグ</dt>
                <dd><input type="text" name="slug" maxlength="200" required value="{{old('slug')}}"></dd>
            </dl>
            <dl>
                <dt>説明(任意)</dt>
                <dd><input type="text" name="description" value="{{old('description')}}"></dd>
            </dl>
            <input type="submit" value="保存">
        </form>
    </div>
</body>
</html>