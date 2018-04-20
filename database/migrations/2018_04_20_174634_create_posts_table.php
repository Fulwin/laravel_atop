<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')-comment('职位名称');
            $table->string('description')->nullable()->comment('职位描述');
            $table->integer('department_id')->nullable()->comment('职位所属部门id');
            $table->tinyInteger('sort')->nullable()->comment('排序');
            $table->tinyInteger('status')->default(1)->comment('职位状态[1->启用, 0->禁用]');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
