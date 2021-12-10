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
        .top-right {
            position: absolute;
            right: -50px;
            top: -50px;
        }
        .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }        
    </style>
</head>
<body>
    <div class="flex-center position-ref">
        <div class="top-right links">
            <form id="logout-form" action="{{ route('logout') }}"  name="logout" method="POST">
                @csrf
                <a href="" onclick="document.logout.submit();return false;">ログアウト</a>
            </form>
            <a href="http://localhost:8000/home">管理者</a>
        </div>
        <h1>記事一覧</h1>
        <h2><a href="http://localhost:8000/add">記事作成</a></h2>
        <p><a href="http://localhost:8000/taxonomylist?type=tag">タグ</a>
           <a href="http://localhost:8000/taxonomylist?type=category">カテゴリ</a>
        </p>

        <table border="1" cellspacing="0" cellpadding="5" align="left">
            <tr>
                <th>タイトル</th>
            </tr>
                @foreach ($lists as $list)
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