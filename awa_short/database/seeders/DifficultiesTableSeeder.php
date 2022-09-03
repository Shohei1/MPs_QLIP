<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DifficultiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "difficulty_level" => 1,
            "difficulty_name" => "初級",
        ];
        DB::table('difficulties')->insert($param);

        $param = [
            "difficulty_level" => 2,
            "difficulty_name" => "中級",
        ];
        DB::table('difficulties')->insert($param);

        $param = [
            "difficulty_level" => 3,
            "difficulty_name" => "上級",
        ];
        DB::table('difficulties')->insert($param);

        $param = [
            "difficulty_level" => 9,
            "difficulty_name" => "ランダム",
        ];
        DB::table('difficulties')->insert($param);
    }
}
