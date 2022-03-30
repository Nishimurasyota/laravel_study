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
        @if($errors->has('name'))
        <tr>
            <th>ERROR</th>
            <td>{{$errors->first('name')}}</td>
        </tr>
        @endif
        <tr>
            <th>name: </th>
            <td><input type="text" name="name" value="{{old('name')}}"></td>
        </tr>
        @if($errors->has('mail'))
        <tr>
            <th>ERROR</th>
            <td>{{$errors->first('mail')}}</td>
        </tr>
        @endif
        <tr>
            <th>mail: </th>
            <td><input type="text" name="mail" value="{{old('mail')}}"></td>
        </tr>
        @if($errors->has('age'))
        <tr>
            <th>ERROR</th>
            <!-- ルールが複数ある場合は$errors->get('')で全て配列として持ってきてforeachでそれぞれを出力することもできる -->
            @foreach($errors->get('age') as $error)
            <td>{{$error}}</td>
            @endforeach
        </tr>
        @endif
        <tr>
            <th>age: </th>
            <td><input type="text" name="age" value="{{old('age')}}"></td>
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
