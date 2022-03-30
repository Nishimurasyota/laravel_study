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

class HelloController extends Controller
{

    public function index(Request $request)
    {

        return view("hello.index",["msg"=>"フォームを入力"]);

    }

    public function post(Request $request)
    {

        $validate_rule = [
            "name" => "required",
            "mail" => "email",
            "age" => "numeric|between:0,150",
        ];

        $this->validate($request, $validate_rule);

        return view("hello.index", ["msg" => "正しく入力されました"]);
    }
}
