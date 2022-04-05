@extends("layouts.helloapp")

<style>
</style>

@section("title", "Person.index")

@section("menubar")
@parent
認証Page
@endsection

@section("content")

<p>{{$message}}</p>

<form action="/person/auth" method="post">
    <table>
        @csrf
        <tr>
            <th>mail: </th>
            <td><input type="text" name="email" id=""></td>
        </tr>
        <tr>
            <th>password: </th>
            <td><input type="password" name="password" id=""></td>
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
