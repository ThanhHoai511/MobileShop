<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeFieldToDetailBillImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_bill_imports', function (Blueprint $table) {
            $table->string('camera_before')->nullable();
            $table->string('camera_after')->nullable();
            $table->string('pin')->nullable();
            $table->string('screen')->nullable();
            $table->string('weight')->nullable();
            $table->string('photos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_bill_imports', function (Blueprint $table) {
            $table->dropColumn('camera_before');
            $table->dropColumn('camera_after');
            $table->dropColumn('pin');
            $table->dropColumn('screen');
            $table->dropColumn('weight');
            $table->dropColumn('photos');
        });
    }
}
