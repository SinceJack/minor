<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('stuid')->comment('学号');
            $table->string('name', 25)->comment('姓名');
            $table->string('idcard', 18)->comment('身份证号');
            $table->string('phone', 11)->comment('电话号码');
            $table->string('nickname', 25)->comment('昵称(2字最好)');
            $table->string('wechat', 50)->comment('微信名');
            $table->string('job', 50)->comment('职业');
            $table->tinyInteger('age')->comment('年龄');
            $table->string('sex','6')->comment('性别(男或女)');
            $table->string('hobby',100)->comment('爱好');
            $table->string('motto',255)->comment('座右铭');
            $table->string('llustrator',100)->comment('喜欢的插画师');
            $table->string('paint','10')->comment('绘画基础(有或无)');
            $table->string('software',100)->comment('软件基础');
            $table->string('device',100)->comment('拥有的设备');
            $table->string('short',255)->comment('短期目标');
            $table->string('long',255)->comment('长期目标');
            $table->string('channel',255)->comment('报名渠道');
            $table->string('ip',15)->comment('用户ip');
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
        Schema::dropIfExists('user_infos');
    }
}
