<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScoreResultsTableSeeder extends Seeder
{
    /**
     * 点数テーブルにテストデータを挿入
     *
     * @return void
     */
    public function run()
    {

        $param = [
            'user_id' => 0,
            'name' => "suzuki",
            'prefecture_id' => 1,
            'game_id' => 1,
            'score' => 50,
            'created_at' => now()
        ];
        DB::table('score_results')->insert($param);

        $param = [
            'user_id' => 0,
            'name' => "taro",
            'prefecture_id' => 2,
            'game_id' => 2,
            'score' => 50,
            'created_at' => now()
        ];
        DB::table('score_results')->insert($param);

        $param = [
            'user_id' => 0,
            'name' => "a",
            'prefecture_id' => 3,
            'game_id' => 3,
            'score' => 50,
            'created_at' => now()
        ];
        DB::table('score_results')->insert($param);

        $param = [
            'user_id' => 0,
            'name' => "123",
            'prefecture_id' => 4,
            'game_id' => 4,
            'score' => 50,
            'created_at' => now()
        ];
        DB::table('score_results')->insert($param);

        $param = [
            'user_id' => 0,
            'name' => "nihon",
            'prefecture_id' => 5,
            'game_id' => 5,
            'score' => 50,
            'created_at' => now()
        ];
        DB::table('score_results')->insert($param);
    }
}