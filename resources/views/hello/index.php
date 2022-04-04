@extends("layouts.helloapp")

<style>
    .pagination {
        text-align: center;
    }

    .pagination li {
        display: inline-block;
    }
</style>

@section("title", "Index")

@section("menubar")
@parent
Index
@endsection

@section("content")

<div>
    <table>
        <tr>
            <th>Name</th>
            <th>Mail</th>
            <th>Age</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item-mail}}</td>
            <td>{{$item-age}}</td>
        </tr>
        @endforeach
    </table>

    {{ $items->links() }}

</div>


@endsection

@section('footer')
copyright 2020 syota
@endsection
