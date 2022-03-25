<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //

    public function index()
    {

        return <<<EOF
        <html>
            <head>
                <title>Index</title>
                <style>
                h1{font-size:100px;}
                </style>
            </head>
            <body>
                <h1>Hello</h1>
                <p>これはHelloコントローラーのIndexアクションです</p>
                <p>this is sample page</p>
            </body>
        </html>
        EOF;
    }
}