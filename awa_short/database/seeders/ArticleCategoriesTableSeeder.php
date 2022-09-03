<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "name" => "講演会",
            "is_show" => true,
            "created_at" => now(),
        ];
        DB::table('article_categories')->insert($param);

        $param = [
            "name" => "イベント",
            "is_show" => true,
            "created_at" => now(),
        ];
        DB::table('article_categories')->insert($param);

        $param = [
            "name" => "採用",
            "is_show" => true,
            "created_at" => now(),
        ];
        DB::table('article_categories')->insert($param);

        $param = [
            "name" => "コンペ",
            "is_show" => true,
            "created_at" => now(),
        ];
        DB::table('article_categories')->insert($param);

        $param = [
            "name" => "Pick up",
            "is_show" => true,
            "created_at" => now(),
        ];
        DB::table('article_categories')->insert($param);
    }
}
