@extends("layouts.helloapp")

@section("title", "Index")

@section("menubar")
    @parent
    インデックスページ
@endsection

@section("content")

    <p>本文のコンテンツ</p>
    <p>Controller value<br>"message" = {{$message}}</p>
    <p>ViewComposer value<br>"view_message" = {{$view_message}}</p>

@endsection

@section("footer")
    copyright 2022 syota.
@endsection
