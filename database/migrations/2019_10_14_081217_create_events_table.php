<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('evetime',20)->default('')->comment('大事记时间');
            $table->string('evetitle',60)->default('')->comment('大事记标题');
            $table->string('evelocation',20)->default('')->comment('大事记坐标');
            $table->string('eveimg',255)->default('')->comment('大事记配图');
            $table->text('evecontent')->comment('大事记详细内容');
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
        Schema::dropIfExists('events');
    }
}
