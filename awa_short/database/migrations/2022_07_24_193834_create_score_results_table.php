<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * 点数テーブルを作成する
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score_results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable()->default(0);
            $table->string('name', 30);
            $table->integer('prefecture_id');
            $table->integer('game_id');
            $table->float('score');
            $table->timestamp('created_at');
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * もしテーブルが存在していたら削除する
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('score_results');
    }
};