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
        $validator = Validator::make($request->query(), [
            "id" => "required",
            "pass" => "required",
        ]);
        if ($validator->fails()) {
            $msg = "クエリーに問題があります";
        } else {
            $msg = "ID/PASSを受け付けました";
        }
        return view("hello.index", ["msg" => $msg,]);
    }

    public function post(Request $request)
    {

        $rules = [
            "name" => "required",
            "mail" => "email",
            "age" => "numeric",
        ];

        $messages = [
            "name.required" => "名前を入力してください",
            "mail.email" => "メールアドレスが必要です",
            "age.numeric" => "年齢を整数で入力してください",
            "age.min" => "年齢は0歳以上で入力してください",
            "age.max" => "年齢は150歳以下で入力してください",
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        $validator->sometimes("age", "min:0", function ($input) {
            return is_numeric($input->age);
        });

        $validator->sometimes("age", "max:150", function ($input) {
            return is_numeric($input->age);
        });

        if ($validator->fails()) {
            return redirect("/hello")->withErrors($validator)->withInput();
        }
        return view("hello.index", ["msg" => "正しく入力されました"]);
    }
}
