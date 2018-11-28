<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailBillImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_bill_imports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_bill_import')->unsigned();
            $table->string('imei')->unique();
            $table->integer('id_product_group')->unsigned();
            $table->foreign('id_product_group')->references('id')->on('product_groups');
            $table->foreign('id_bill_import')->references('id')->on('bill_imports');
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
        Schema::dropIfExists('detail_bill_imports');
    }
}
