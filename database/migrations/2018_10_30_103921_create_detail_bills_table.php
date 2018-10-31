<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_bills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_detail_product')->unsigned();
            $table->integer('id_bill')->unsigned();
            $table->double('price');
            $table->foreign('id_bill')->references('id')->on('bills');
            $table->foreign('id_detail_product')->references('id')->on('detail_products');
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
        Schema::dropIfExists('detail_bills');
    }
}
