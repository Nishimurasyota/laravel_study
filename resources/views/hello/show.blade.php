@extends("layouts.helloapp")

@section("title", "Show")

@section("menubar")
@parent
詳細
@endsection

@section("content")
    <table>

        <tr>
            <th>id: </th>
            <td><input type="text" name="name" value="{{$item->id}}"></td>
        </tr>
        <tr>
            <th>name: </th>
            <td><input type="text" name="name" value="{{$item->name}}"></td>
        </tr>
        <tr>
            <th>mail: </th>
            <td><input type="text" name="mail" value="{{$item->mail}}"></td>
        </tr>
        <tr>
            <th>age: </th>
            <td><input type="text" name="age" value="{{$item->age}}"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </table>
@endsection

@section('footer')
copyright 2020 syota
@endsection
