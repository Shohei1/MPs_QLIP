<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * OS情報テーブルを作成する
     *
     * @return void
     */
    public function up()
    {
        Schema::create('os_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 10);
            $table->boolean('is_show')->nullable()->default(1);
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
        Schema::dropIfExists('os_types');
    }
};