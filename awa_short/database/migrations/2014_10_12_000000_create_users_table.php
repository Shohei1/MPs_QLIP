<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * ユーザー情報テーブルを作成する
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            // 権限
            $table->integer('authority')->default(9);
            $table->integer('prefecture_id')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender', 20)->nullable();
            $table->integer('icon_id')->nullable();
            $table->timestamp('created_at')->nullable();
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
        Schema::dropIfExists('users');
    }
};