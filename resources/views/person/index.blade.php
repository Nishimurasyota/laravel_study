@extends("layouts.helloapp")

@section("title", "Person.index")

@section("menubar")
@parent
Index
@endsection

@section("content")

<table>
    <tr>
        <th>Person</th>
        <th>Board</th>
    </tr>
    @foreach($hasItems as $item)
    <tr>
        <td>
            <a href="{{route('person.edit',['id' => $item->id])}}">
                {{$item->getData()}}
            </a>
        </td>
        <td>
            @if($item->boards != null)
            <table width="100%">
                @foreach($item->boards as $obj)
                <tr>
                    <td>
                        {{$obj->getData()}}
                    </td>
                </tr>
                @endforeach
            </table>
            @endif
        </td>
    </tr>
    @endforeach
</table>
<div style="margin-top:10px;">
    <table>
        <tr>
            <th>Person</th>
        </tr>
        @foreach($noItems as $item)
        <tr>
            <td>
                <a href="{{route('person.edit',['id' => $item->id])}}">
                    {{$item->getData()}}
                </a>
            </td>
        </tr>
        @endforeach
    </table>
</div>

<a href="{{route('person.add')}}">新規作成</a>

@endsection

@section('footer')
copyright 2020 syota
@endsection
