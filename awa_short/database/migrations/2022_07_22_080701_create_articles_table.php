<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * 記事情報テーブルを作成する
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 60);
            $table->integer('article_category_id');
            $table->string('thumbnail')->nullable();
            $table->string('summary', 250)->nullable();
            // ↑使わないかも
            $table->text('content');
            $table->integer('icon_id')->nullable();
            $table->boolean('is_show')->nullable()->default(1);
            $table->timestamp('created_at');
            $table->string('created_user', 40)->default('admin');
            $table->timestamp('updated_at')->nullable();
            $table->string('updated_user', 40)->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('deleted_user', 40)->nullable();
        });
    }

    /**
     * もしテーブルが存在していたら削除する
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
