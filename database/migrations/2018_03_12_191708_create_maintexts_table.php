<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintexts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 32);
            $table->text('body');
            $table->string('url', 32);
            $table->enum('show/hide',['show','hide'])->default('show');
            $table->enum('lang',['en','ru'])->default('ru');
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
        Schema::dropIfExists('maintexts');
    }
}
