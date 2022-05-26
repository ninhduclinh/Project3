<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNofiticationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nofitication', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('nof_sender')->nullable()->length(20);
            $table->bigInteger('nof_receiver')->nullable()->length(20);
            $table->longText('nof_content');
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
        Schema::dropIfExists('nofitication');
    }
}
