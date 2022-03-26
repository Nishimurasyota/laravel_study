<html lang="ja">

<head>
    <title>Blade/Index</title>
</head>

<body>
    <h1>Blade/Index</h1>
    <ol>
        @foreach($data as $item)
        @if($loop->first)
        <p>データ一覧</p>
        <ul>
            @endif
            <li>
                No,{{$loop->iteration}}. {{$item}}
            </li>
            @if($loop->last)
        </ul>
        <p>ここまで</p>
        @endif
        @endforeach
    </ol>

</body>

</html>