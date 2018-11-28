<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeFieldToDetailProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_products', function (Blueprint $table) {
            $table->bigInteger('price');
            $table->bigInteger('sale')->nullable();
            $table->bigInteger('seen')->default(0);
            $table->bigInteger('like')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_products', function (Blueprint $table) {
            $table->dropColumn('price');
            $table->dropColumn('sale');
            $table->dropColumn('seen');
            $table->dropColumn('like');
        });
    }
}
