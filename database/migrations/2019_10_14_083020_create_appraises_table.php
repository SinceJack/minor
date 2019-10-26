<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppraisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appraises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('appimg',255)->default('')->comment('评价人头像');
            $table->string('apprname',20)->default('')->comment('评价人名称');
            $table->string('apprjob',50)->default('')->comment('评价人职业');
            $table->string('apprcontent',255)->default('')->comment('评价内容');
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
        Schema::dropIfExists('appraises');
    }
}
