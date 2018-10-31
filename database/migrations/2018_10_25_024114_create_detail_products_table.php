<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_product_group')->unsigned();
            $table->integer('id_detail_bill_import')->unsigned();
            $table->string('imei')->unique();
            $table->string('camera_before')->nullable();
            $table->string('camera_after')->nullable();
            $table->string('pin')->nullable();
            $table->string('screen')->nullable();
            $table->string('weight')->nullable();
            $table->foreign('id_product_group')->references('id')->on('product_groups');
            $table->foreign('id_detail_bill_import')->references('id')->on('detail_bill_imports');
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
        Schema::dropIfExists('detail_products');
    }
}
