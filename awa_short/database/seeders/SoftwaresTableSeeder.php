<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoftwaresTableSeeder extends Seeder
{
    /**
     * 実装用にテストデータから更新
     * 8/4＠Sin
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'OS',
            'is_show' => TRUE,
            'created_at' => now(),
        ];
        DB::table('softwares')->insert($param);

        $param = [
            'name' => 'VS Code',
            'is_show' => TRUE,
            'created_at' => now(),
        ];
        DB::table('softwares')->insert($param);

        $param = [
            'name' => 'Photoshop',
            'is_show' => TRUE,
            'created_at' => now(),
        ];
        DB::table('softwares')->insert($param);

        $param = [
            'name' => 'Illustlator',
            'is_show' => TRUE,
            'created_at' => now(),
        ];
        DB::table('softwares')->insert($param);

        $param = [
            'name' => 'Powerpoint',
            'is_show' => TRUE,
            'created_at' => now(),
        ];
        DB::table('softwares')->insert($param);

        $param = [
            'name' => 'Excel',
            'is_show' => TRUE,
            'created_at' => now(),
        ];
        DB::table('softwares')->insert($param);

        $param = [
            'name' => 'Word',
            'is_show' => TRUE,
            'created_at' => now(),
        ];
        DB::table('softwares')->insert($param);

        $param = [
            'name' => 'Gmail',
            'is_show' => TRUE,
            'created_at' => now(),
        ];
        DB::table('softwares')->insert($param);

        $param = [
            'name' => 'Outlook',
            'is_show' => TRUE,
            'created_at' => now(),
        ];
        DB::table('softwares')->insert($param);
    }
}
