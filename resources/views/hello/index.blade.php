@extends("layouts.helloapp")

@section("title", "Index")

@section("menubar")
    @parent
    インデックスページ
@endsection

@section("content")

    <p>本文のコンテンツ</p>
    <ul>
        @each("components.item", $data, "item")
    </ul>

@endsection

@section("footer")
    copyright 2022 syota.
@endsection
