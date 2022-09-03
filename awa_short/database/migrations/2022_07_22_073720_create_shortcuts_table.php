<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * マイグレーション
     * ショートカット情報テーブルを作成する
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shortcuts', function (Blueprint $table) {
            $table->increments('id');

            // $table->integer('game_id');
            $table->integer('os_types_id');
            $table->integer('software_id');
            $table->integer('difficulty_id');
            $table->string('key', 20);
            $table->string('key2', 20)->nullable();
            $table->string('key3', 20)->nullable();
            $table->string('key4', 20)->nullable();
            $table->string('description', 100);
            $table->boolean('is_show')->nullable()->default(2);
            $table->integer('usage')->default(2);
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
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
        Schema::dropIfExists('shortcuts');
    }
};