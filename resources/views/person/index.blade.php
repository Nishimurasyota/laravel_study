@extends("layouts.helloapp")

<style>
    .pagination {
        text-align: center;
    }

    .pagination li {
        display: inline-block;
    }

    tr th a:link {
        color: white;
    }

    tr th a:visited {
        color: white;
    }

    tr th a:hover {
        color: white;
    }

    tr th a:active {
        color: white;
    }
</style>

@section("title", "Person.index")

@section("menubar")
@parent
Index
@endsection

@section("content")

@if(Auth::check())
<p>
    USER: {{$user->name . "(" .$user->email . ")"}}
</p>
@else
<p>ログインしていません (<a href="/login">ログイン</a>|<a href="/register">登録</a>)</p>
@endif
<table>
    <tr>
        <th><a href="/hello?sort=name">Person</a></th>
        <th>Board</th>
    </tr>
    @foreach($hasItems as $item)
    <tr>
        <td>
            <a href="{{route('person.edit',['id' => $item->id])}}">
                {{$item->getData()}}
            </a>
            <br>
            <a href="{{route('person.del',['id' => $item->id])}}">
                削除
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
                <br>
                <a href="{{route('person.del',['id' => $item->id])}}">
                    削除
                </a>
            </td>
        </tr>
        @endforeach
    </table>
</div>

<a href="{{route('person.add')}}">新規作成</a>
<br>
{{$hasItems->appends(["sort" => $sort])->links()}}

@endsection

@section('footer')
copyright 2020 syota
@endsection
