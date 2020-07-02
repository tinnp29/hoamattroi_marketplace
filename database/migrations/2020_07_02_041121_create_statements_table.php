<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statements', function (Blueprint $table) {
            //  Luu tru giao dich, doanh thu cho seller
            $table->bigIncrements('id');
            $table->bigInteger('seller_id');
            $table->double('amount');
            $table->bigInteger('order_id')->default(0);
            $table->tinyInteger('is_plus')->default(1); // 1 - tien vao
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
        Schema::dropIfExists('statements');
    }
}
