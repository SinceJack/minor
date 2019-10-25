<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('program_id')->default(0)->comment('外键：公开课的id');
            $table->string('title',27)->default('')->comment('能够学到：标题');
            $table->string('intro',100)->default('')->comment('能够学到：简介');
            $table->string('picture',255)->default('')->comment('能够学到：配图');
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
        Schema::dropIfExists('program_contents');
    }
}
