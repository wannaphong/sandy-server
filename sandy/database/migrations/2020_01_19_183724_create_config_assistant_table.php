<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigAssistantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_assistant', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('assistantid');
            $table->integer('house_number')->nullable();
            $table->integer('alley')->nullable();
            $table->integer('village')->nullable();
            $table->string('subdistrict')->nullable();
            $table->string('district')->nullable();
            $table->string('province')->nullable();
            $table->string('linenotify')->nullable();
            $table->string('wifi_config')->nullable();
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
        Schema::dropIfExists('config_assistant');
    }
}
