<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 表名,followers
        Schema::create('followers', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('stars_id')->index();// 被关注者,博主,明星
            $table->integer('fans_id')->index();// 关注者,粉丝

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('followers');
    }
}
