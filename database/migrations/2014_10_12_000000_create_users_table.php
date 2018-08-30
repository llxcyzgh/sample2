<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            // $table->string('password');
            $table->string('password', 60); // 最大长度为60
            $table->rememberToken(); // 由 rememberToken 方法为用户创建一个 remember_token 字段，用于保存『记住我』的相关信息。
            $table->timestamps(); // 由 timestamps 方法创建了一个 created_at 和一个 updated_at 字段，分别用于保存用户的创建时间和更新时间
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
