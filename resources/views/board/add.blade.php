@extends("layouts.helloapp")

@section("title", "Board.Add")

@section("menubar")
@parent
新規作成
@endsection

@section("content")

@if(count($errors) > 0)
<div>
    <ul>
        @foreach($errors as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/board/add" method="post">
    <table>
        @csrf
        <tr>
            <th>Person_id: </th>
            <td><input type="text" name="person_id"></td>
        </tr>
        <tr>
            <th>Title: </th>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <th>Message: </th>
            <td><input type="text" name="message"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </table>
</form>

@endsection

@section('footer')
copyright 2020 syota
@endsection
