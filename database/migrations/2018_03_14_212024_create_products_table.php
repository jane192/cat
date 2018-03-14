<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
             $table->string('name',32);
             $table->string('price',32);
            $table->text('body');
            $table->string('picture');
            $table->integer('catalog_id');
            $table->integer('user_id');
            $table->enum('showhide',['show','hide'])->default('show'); //$table->softDeletes();
            $table->string('status',32);
            $table->string('product_code',32);
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
        Schema::dropIfExists('products');
    }
}
