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

        return view("hello.index");

    }

    public function post(Request $request)
    {
        return view("hello.index", ["msg" => $request->msg]);
    }
}
