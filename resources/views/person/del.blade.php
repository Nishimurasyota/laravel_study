@extends("layouts.helloapp")

@section("title", "Person.Edit")

@section("menubar")
@parent
削除
@endsection

@section("content")

<form action="/person/del" method="post">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr>
            <th>name: </th>
            <td>{{$form->name}}</td>
        </tr>
        <tr>
            <th>mail: </th>
            <td>{{$form->mail}}</td>
        </tr>
        <tr>
            <th>age: </th>
            <td>{{$form->age}}</td>
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
