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

class HelloController extends Controller
{

    public function index(Request $request)
    {

        if ($request->hasCookie("msg")) {
            $msg = "cookie: " . $request->cookie("msg");
        } else {
            $msg = "※cookieではありません";
        }

        return view("hello.index", ["msg" => $msg]);
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
}
