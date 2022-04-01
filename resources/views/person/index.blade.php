@extends("layouts.helloapp")

@section("title", "Person.index")

@section("menubar")
@parent
Index
@endsection

@section("content")

<table>
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
