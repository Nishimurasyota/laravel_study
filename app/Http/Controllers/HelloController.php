<?php

namespace App\Http\Controllers;

// global $head, $style, $body, $end;

// $head = "<html><head>";
// $style = <<<EOF
// <style>
// h1{font-size:100px;}
// </style>
// EOF;
// $body = "</head><body>";
// $end = "</body></html>";


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{

    public function index(Request $request)
    {

        if ($request->id) {
            $params = ["id" => $request->id];
            $items = DB::select("select * from peoples where id = :id", $params);
        } else {
            $items = DB::select("select * from peoples");
        }
        return view("hello.index", ["items" => $items]);
    }

    public function post(Request $request)
    {

        $validate_rule = [
            "msg" => "required",
        ];

        $this->validate($request, $validate_rule);
        $msg = $request->msg;
        $response = response()->view(
            "hello.index",
            ["msg" => "[" . $msg . "]をcookieに保存しました"]
        );
        $response->cookie("msg", $msg, 100);

        return $response;
    }

    public function add(Request $request)
    {
        return view("hello.add");
    }

    public function create(Request $request){
        $param = [
            "name" => $request->name,
            "mail" => $request->mail,
            "age" => $request->age,
        ];
        DB::insert("insert into peoples (name, mail, age) values(:name, :mail, :age)",$param);
        return redirect("/hello");
    }

}
