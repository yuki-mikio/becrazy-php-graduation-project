<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>カテゴリ･タグ</title>

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
        @if($title === 'category')
            <h1>カテゴリ一覧</h1>
        @else
            <h1>タグ一覧</h1>
        @endif
        <h2><a href="http://localhost:8000/taxonomy">追加</a></h2>
        <form method="POST" action="taxonomydel">
            @csrf
            <table border="1" cellspacing="0" cellpadding="5" align="left">
                <tr>
                    <th><input type="submit" value="削除する"></th>
                    <th>名称</th>
                </tr>
                    @foreach ($lists as $list)
                    <tr>
                        <td> 
                            <input type="checkbox" name="id" value="{{ $list->id }}">
                        </td>
                        <td>
                            <a href="http://localhost:8000/taxonomyEdit?id={{$list->id}}">{{ $list->name }}
                            </a>
                        </td>
                    </tr> 
                    @endforeach
            </table>
        </form>
    </div>
</body>
</html>