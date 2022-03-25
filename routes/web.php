<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('hello/{msg?}', function ($msg = "no message") {

    $html = <<<EOF
<html>
    <head>
    <title>Hello</title>
    <style>
    h1{font-size:100px;}
    </style>
    </head>
    <body>
        <h1>Hello</h1>
        <p>message：{$msg}</p>
        <p>this is sample page</p>
    </body>
</html>
EOF;

    return $html;
});

Route::get('/', function () {
    return view('welcome');
});