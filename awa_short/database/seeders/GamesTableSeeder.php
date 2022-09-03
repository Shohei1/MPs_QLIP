<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
  // 量が多いのでCSVでインポートする
class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // public function run()
    // {
    //     $param = [
    //         'name' => 'Windows VS Code 初級',
    //         'os_id' => 1,
    //         'software_id' => 1,
    //         'difficulty_id' => 1,
    //         'is_show' => TRUE,
    //         'created_at' => now(),
    //     ];
    //     DB::table('games')->insert($param);

    //     $param = [
    //         'name' => 'Windows VS Code 中級',
    //         'os_id' => 1,
    //         'software_id' => 1,
    //         'difficulty_id' => 2,
    //         'is_show' => TRUE,
    //         'created_at' => now(),
    //     ];
    //     DB::table('games')->insert($param);

    //     $param = [
    //         'name' => 'Windows VS Code 上級',
    //         'os_id' => 1,
    //         'software_id' => 1,
    //         'difficulty_id' => 3,
    //         'is_show' => TRUE,
    //         'created_at' => now(),
    //     ];
    //     DB::table('games')->insert($param);

    //     $param = [
    //         'name' => 'Windows Illustlator 初級',
    //         'os_id' => 1,
    //         'software_id' => 3,
    //         'difficulty_id' => 1,
    //         'is_show' => TRUE,
    //         'created_at' => now(),
    //     ];
    //     DB::table('games')->insert($param);

    //     $param = [
    //         'name' => 'Windows Illustlator 中級',
    //         'os_id' => 1,
    //         'software_id' => 3,
    //         'difficulty_id' => 2,
    //         'is_show' => TRUE,
    //         'created_at' => now(),
    //     ];
    //     DB::table('games')->insert($param);
    // }
}
