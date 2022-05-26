<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehouseStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse_stock', function (Blueprint $table) {
            $table->increments('id');
            $table->string('wh_name');
            $table->string('wh_adr');
            $table->timestamps();
        });

        Schema::create('product_of_warehouses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('wh_product_id');
            $table->unsignedInteger('warehouse_id');
            $table->unsignedInteger('quantity');
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
        Schema::dropIfExists('warehouse_stock');
        Schema::dropIfExists('product_of_warehouses');
    }
}
