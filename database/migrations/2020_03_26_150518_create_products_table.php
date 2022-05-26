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
            $table->string('pro_name');
            $table->string('pro_name_slug');
            $table->integer('pro_category_id')->nullable()->length(10);
            $table->bigInteger('pro_price')->default(0);
            $table->bigInteger('pro_author_id')->nullable()->length(20);
            $table->tinyInteger('pro_sale')->default(0);
            $table->tinyInteger('pro_status')->default(1);
            $table->tinyInteger('pro_hot')->default(0);
            $table->longText('pro_description')->nullable();
            $table->longText('pro_content')->nullable();
            $table->string('pro_image')->nullable();
            $table->integer('pro_pay')->default(0);
            $table->integer('pro_number')->default(0);
            $table->integer('pro_number_of_reviewers')->default(0);
            $table->integer('pro_total_star')->default(0);
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
