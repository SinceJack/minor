<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',32)->default('')->comment('用户称呼');
            $table->string('email',50)->default('')->comment('用户邮箱');
            $table->string('phone',11)->default('')->comment('用户电话');
            $table->string('subject',50)->nullable()->comment('用户意向课程');
            $table->string('message',255)->default('')->comment('用户留言');
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
        Schema::dropIfExists('contacts');
    }
}
