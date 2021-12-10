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
        <h1>{{$cata->name}}の記事</h1>
            <table border="1" cellspacing="0" cellpadding="5" align="left">
                <tr>
                    <th>タイトル</th>
                </tr>
                    @foreach ($cata->posts as $list)
                    <tr>
                        <td>
                            <a href="http://localhost:8000/check?id={{$list->id}}">
                            {{ $list->title }}</a>
                        </td>
                    </tr>
                        @endforeach
            </table>

    </div>
</body>
</html>