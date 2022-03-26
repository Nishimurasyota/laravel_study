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

    public function index()
    {

        $data = [
            ["name" => "taro", "mail" => "taro@mail"],
            ["name" => "hanako", "mail" => "hanako@mail"],
            ["name" => "jiro", "mail" => "jiro@mail"]
        ];
        return view("hello.index", ["data" => $data]);
    }

    public function post(Request $request)
    {
        return view("hello.index", ["msg" => $request->msg]);
    }
}
