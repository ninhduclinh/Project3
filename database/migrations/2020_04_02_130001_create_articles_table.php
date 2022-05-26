<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('a_name');
            $table->string('a_name_slug');
            $table->longText('a_description')->nullable();
            $table->longText('a_content')->nullable();
            $table->tinyInteger('a_status')->default(1);
            $table->bigInteger('a_author_id')->nullable()->length(20);
            $table->string('a_image')->nullable();
            $table->integer('a_view')->default(0);
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
        Schema::dropIfExists('articles');
    }
}
