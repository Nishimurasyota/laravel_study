@extends("layouts.helloapp")

@section("title", "Index")

@section("menubar")
@parent
インデックスページ
@endsection

@section("content")

<p>{{$msg}}</p>
@if(count($errors) > 0)
<div>
    <p>入力に誤りがあります</p>
</div>
@endif
<form action="/hello" method="post">

<table>
    @csrf
    @if($errors->has("msg"))
    <tr>
        <th>ERROR</th>
        <td>{{$errors->first("msg")}}</td>
    </tr>
    @endif
    <tr>
        <th>Message: </th>
        <td><input type="text" name="msg" value='{{old("msg")}}'></td>
    </tr>
    <tr>
        <th></th>
        <td><input type="submit" value="send"></td>
    </tr>
</table>

</form>

@endsection

@section("footer")
copyright 2022 syota
@endsection
