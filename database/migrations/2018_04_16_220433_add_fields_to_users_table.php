<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable()->comment('用户头像');
            $table->string('introduction')->nullable()->comment('用户简介');
            $table->tinyInteger('phone')->nullable()->comment('用户手机号');
            $table->integer('gender')->default(1)->comment('用户性别[1=>男, 0=>女]');
            $table->integer('department_id')->nullable()->index()->comment('用户部门');
            $table->integer('level_id')->nullable()->index()->comment('用户级别');
            $table->integer('user_id')->nullable()->index()->comment('汇报人');
            $table->tinyInteger('status')->default(1)->comment('用户状态[1=>正常, >0=>非正常]');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar');
            $table->dropColumn('introduction');
            $table->dropColumn('phone');
            $table->dropColumn('gender');
            $table->dropColumn('department_id');
            $table->dropColumn('level_id');
            $table->dropColumn('user_id');
            $table->dropColumn('status');
        });
    }
}
