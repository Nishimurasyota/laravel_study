<html lang="ja">

<head>
    <title>Blade/Index</title>
</head>

<body>
    <h1>Blade/Index</h1>
    <ol>
        @foreach($data as $item)
        <li>{{$item}}</li>
        @endforeach
    </ol>

</body>

</html>