<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restdata;

class RestdataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "message" => "Google Japan",
            "url" => "http://www.google.com/",
        ];
        $restdata = new Restdata;
        $restdata->fill($param)->save();

        $param = [
            "message" => "Yahoo Japan",
            "url" => "http://www.yahoo.co.jp/",
        ];
        $restdata = new Restdata;
        $restdata->fill($param)->save();

        $param = [
            "message" => "MSN Japan",
            "url" => "http://www.msn.com/ja-jp",
        ];
        $restdata = new Restdata;
        $restdata->fill($param)->save();
    }
}
