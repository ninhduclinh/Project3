<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ra_product_id')->nullable()->length(10);
            $table->tinyInteger('ra_number')->default(0);
            $table->string('ra_content')->nullable();
            $table->bigInteger('ra_user_id')->nullable()->length(20);
            $table->timestamps();
            // $table->foreign('ra_product_id')->references('id')->on('products')->onDelete('set null');
            // $table->foreign('ra_user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratings');
    }
}
