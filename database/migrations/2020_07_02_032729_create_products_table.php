<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->text('name');
            $table->bigInteger('category_id');
            $table->text('description');
            $table->double('price');
            $table->double('quantity');
            $table->bigInteger('user_id'); // Who Post
            $table->tinyInteger('status')->default(0); // 0 - con hang, 1 - het hang, 
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
