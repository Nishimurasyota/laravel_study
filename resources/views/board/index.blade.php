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
    </tr>
    @foreach($items as $item)
    <tr>
        <td>{{$item->getData()}}</td>
    </tr>
    @endforeach
</table>

@endsection

@section('footer')
copyright 2020 syota
@endsection
