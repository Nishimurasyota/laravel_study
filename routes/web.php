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
        <div>
            <p>this is sample page</p>
        </div>
    </body>
</html>
EOF;

Route::get('hello', function ()  use ($html) {
    return $html;
});

Route::get('/', function () {
    return view('welcome');
});