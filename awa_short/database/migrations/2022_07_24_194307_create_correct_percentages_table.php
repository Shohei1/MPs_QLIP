<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * 正答率テーブルを作る
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correct_percentages', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('shortcut_id');
            $table->integer('error_count');
            $table->integer('try_count');
            // 桁数は暫定的。全桁数6桁、小数点以下3桁を指定している。
            $table->float('correct_percentage', 6, 3)->nullable();
            $table->timestamp('create_at');
            $table->timestamp('delete_at')->nullable();
        });
    }

    /**
     * もしテーブルが存在していたら削除する
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('correct_percentages');
    }
};