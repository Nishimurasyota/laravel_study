@extends("layouts.helloapp")

@section("title", "Index")

@section("menubar")
    @parent
    インデックスページ
@endsection

@section("content")
    <p>本文のコンテンツ</p>
    <p>必要なだけ記述可能</p>

@component("components.message")
    @slot("msg_title")
        CAUTION!
    @endslot

    @slot("msg_content")
        これはメッセージの表示です
    @endslot
@endcomponent

@endsection

@section("footer")
    copyright 2022 syota.
@endsection
