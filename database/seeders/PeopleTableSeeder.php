<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "name" => "nagomi",
            "mail" => "nagomi@mail",
            "age" => 20,
        ];
        DB::table("people")->insert($param);

        $param = [
            "name" => "kaito",
            "mail" => "kaito@mail",
            "age" => 28,
        ];
        DB::table("people")->insert($param);

        $param = [
            "name" => "aoi",
            "mail" => "aoi@mail",
            "age" => 32,
        ];
        DB::table("people")->insert($param);
    }
}
