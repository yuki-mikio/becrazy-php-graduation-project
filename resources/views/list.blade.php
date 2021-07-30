<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>編集リスト</title>

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
        <h1>記事一覧</h1>
        <form method="POST">
            @csrf
            <table border="1" cellspacing="0" cellpadding="5" align="left">
                <select name="id">
                    @foreach ($lists as $list)
                        <option value="{{ $list->id }}">
                            {{ $list->title }}
                        </option>
                    @endforeach
                </select>
            </table>
            <input type="submit" value="記事閲覧">
        </form>
    </div>
</body>
</html>