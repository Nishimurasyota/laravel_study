@extends("layouts.helloapp")

@section("title", "Show")

@section("menubar")
@parent
詳細
@endsection

@section("content")

@if($item != null)
    @foreach($item as $i)
    <table width="400px">

        <tr>
            <th width="50px">id: </th>
            <td width="50px"><input type="text" name="name" value="{{$i->id}}"></td>
        </tr>
        <tr>
            <th width="50px">name: </th>
            <td width="50px"><input type="text" name="name" value="{{$i->name}}"></td>
        </tr>
    </table>
    @endforeach
@endif
@endsection

@section('footer')
copyright 2020 syota
@endsection
