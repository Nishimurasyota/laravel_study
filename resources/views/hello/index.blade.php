@extends("layouts.helloapp")

@section("title", "Index")

@section("menubar")
@parent
インデックスページ
@endsection

@section("content")

<p>本文のコンテンツ</p>
<table>
    @foreach($data as $item)
    <tr>
        <th>{{$item["name"]}}</th>
        <td>{{$item["mail"]}}</td>
    </tr>
    @endforeach
</table>
@endsection

@section("footer")
copyright 2022 syota.
@endsection
