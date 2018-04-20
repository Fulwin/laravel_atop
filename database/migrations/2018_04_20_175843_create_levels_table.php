<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('级别名称');
            $table->string('description')->nullable()->comment('级别描述');
            $table->tinyInteger('sort')->nullable()->comment('排序');
            $table->tinyInteger('status')->default(1)->comment('级别状态[1->启用, 0->禁用]');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('levels');
    }
}
