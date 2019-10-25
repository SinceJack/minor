<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('proimg',255)->default('')->comment('公开课宣传图');
            $table->string('protitle',30)->default('')->comment('标题');
            $table->string('prointro',150)->default('')->comment('简介');
            $table->string('procontent',255)->default('')->comment('详情');
            $table->string('prosuit',30)->default('')->comment('适合人群');
            $table->integer('pronumber')->default(0)->comment('班级人数');
            $table->datetime('protime')->default('2019-10-14 17:15:08')->comment('开课时间');
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
        Schema::dropIfExists('programs');
    }
}
