@extends("layouts.helloapp")

@section("title", "Session")

@section("menubar")
@parent
Session
@endsection

@section("content")

<p>{{$session_data}}</p>

<form action="/hello/session " method="post">
    @csrf
    <input type="text" name="input">
    <input type="submit" value="send">
</form>

@endsection

@section('footer')
copyright 2020 syota
@endsection
