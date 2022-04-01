@extends("layouts.helloapp")

@section("title", "Board.index")

@section("menubar")
@parent
BoardのIndexページ
@endsection

@section("content")

<table>
    <tr>
        <th>Data</th>
        <th>Person</th>
    </tr>
    @foreach($items as $item)
    <tr>
        <td>{{$item->title}}</td>
        <td>{{$item->person->name}}</td>
    </tr>
    @endforeach
</table>

@endsection

@section('footer')
copyright 2020 syota
@endsection
