<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(ArticlesTableSeeder::class);
        $this->call(SoftwaresTableSeeder::class);
        $this->call(ScoreResultsTableSeeder::class);
        $this->call(PrefecturesTableSeeder::class);
        $this->call(OsTypesTableSeeder::class);

        // $this->call(ShortcutsTableSeeder::class);
        // CSVでインポートするのでコメントアウト

        $this->call(IconsTableSeeder::class);
        $this->call(ArticleCategoriesTableSeeder::class);
        $this->call(DifficultiesTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        // $this->call(GamesTableSeeder::class);
        // CSVでインポートするのでコメントアウト
    }
}
