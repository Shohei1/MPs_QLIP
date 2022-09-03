<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OsTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'Windows',
            'is_show' => TRUE,
            'created_at' => now(),
        ];
        DB::table('os_types')->insert($param);

        $param = [
            'name' => 'macOS',
            'is_show' => TRUE,
            'created_at' => now(),
        ];
        DB::table('os_types')->insert($param);
    }
}