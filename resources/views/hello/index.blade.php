<html lang="ja">

<head>
    <title>Blade/Index</title>
</head>

<body>
    <h1>Blade/Index</h1>
    <ol>
        @php
        $counter = 0;
        @endphp
        @while ($counter < count($data)) <li>{{$data[$counter]}}</li>
            @php
            $counter++;
            @endphp
            @endwhile
    </ol>

</body>

</html>