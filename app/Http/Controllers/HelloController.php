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


function tag($tag, $txt)
{
    return "<{$tag}>" . $txt . "</{$tag}>";
}
class HelloController extends Controller
{

    public function index(Request $request, Response $response)
    {
        $html = <<<EOF

        <html>
            <head>
                <title>Edit</title>
            </head>
            <body>
                <h1>Hello</h1>
                <h3>Response</h3>
                <pre>{$response}</pre>
                <h3>Request</h3>
                <pre>{$request}</pre>
            </body>
        </html>
        EOF;

        $response->setContent($html);
        return $response;
    }
    /**
     * シングルアクションコントローラー
     *
     * @return void
     */
    // public function __invoke()
    // {
    //     return <<<EOF

    // <html>
    //     <head>
    //         <title>Edit</title>
    //     </head>
    //     <body>
    //         <h1>Single Action</h1>
    //         <p>シングルアクションのページです</p>
    //     </body>
    // </html>
    // EOF;
    // }

    //

    // public function index()
    // {
    //     global $head, $style, $body, $end;

    //     $html = $head . tag("title", "Hello/index") . $style . $body
    //         . tag("h1", "index") . tag("p", "this is Index page")
    //         . '<a href="/hello/other">go to other page</a>'
    //         . $end;

    //     return $html;
    // }

    // public function other()
    // {
    //     global $head, $style, $body, $end;

    //     $html = $head . tag("title", "Hello/Other") . $style . $body
    //         . tag("h1", "Other") . tag("p", "this is other page")
    //         . $end;
    //     return $html;
    // }
}