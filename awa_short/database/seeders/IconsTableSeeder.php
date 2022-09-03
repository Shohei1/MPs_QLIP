<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "image" => "icon01.ico",
            "name" => "Alpha",
            "is_show" => true,
            "created_at" => now(),


        ];
        DB::table('icons')->insert($param);

        $param = [
            "image" => "icon02.ico",
            "name" => "Beta",
            "is_show" => true,
            "created_at" => now(),

        ];
        DB::table('icons')->insert($param);

        $param = [
            "image" => "icon03.ico",
            "name" => "Camma",
            "is_show" => true,
            "created_at" => now(),

        ];
        DB::table('icons')->insert($param);

        $param = [
            "image" => "icon04.ico",
            "name" => "Delta",
            "is_show" => true,
            "created_at" => now(),

        ];
        DB::table('icons')->insert($param);

        $param = [
            "image" => "icon05.ico",
            "name" => "Epsilon",
            "is_show" => true,
            "created_at" => now(),


        ];
        DB::table('icons')->insert($param);
    }
}

// nameは仮置き中
// 正式に決まり次第差し替え
