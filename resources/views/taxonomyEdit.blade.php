<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>カテゴリ･タグ編集</title>

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
        <h1>カテゴリ･タグ編集フォーム</h1>
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
            <input type="hidden" name="id" value="{{ $edit->id }}">
            <dl>
                <dt>名前</dt>
                <dd><input type="text" name="name" required value="{{ $edit->name }}"></dd>
            </dl>
            <dl>
                <dt>スラッグ</dt>
                <dd><input type="text" name="slug" maxlength="200" required value="{{ $edit->slug }}"></dd>
            </dl>
            <dl>
                <dt>説明(任意)</dt>
                <dd><input type="text" name="description" value="{{ $edit->description }}"></dd>
            </dl>
            <input type="submit" value="更新">
        </form>
    </div>
</body>
</html>