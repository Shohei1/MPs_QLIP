<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->integer('os_types_id');
            $table->integer('software_id');
            $table->integer('difficulty_id');
            $table->string('description')->nullable();
            $table->integer('time')->nullable();
            $table->integer('number_of_questions');
            $table->integer('type');
            $table->boolean('is_show')->nullable()->default(1);
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};