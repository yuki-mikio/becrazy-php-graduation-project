<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>記事追加</title>

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
        <h1>記事追加フォーム</h1>
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
                <dt>タイトル</dt>
                <dd><input type="text" name="title" required value="{{ old('title') }}"></dd>
            </dl>
            <dl>
                <dt>本文</dt>
                <dd><textarea name="content" required>{{ old('content') }}</textarea></dd>
            </dl>
            <dl>
                <dt>ステータス</dt>
                <input type="radio" name="status" value="publish" checked="checked">公開
                <input type="radio" name="status" value="draft">下書き
            </dl>
            <dl>
                <dt>スラッグ</dt>
                <dd><input type="text" name="slug" required value="{{ old('title') }}"></dd>
            </dl>
            <input type="submit" value="保存">
        </form>
    </div>
</body>
</html>