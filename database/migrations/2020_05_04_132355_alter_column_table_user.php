<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterColumnTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->char('phone')->nullable();
            $table->string('avatar')->nullable();
            $table->tinyInteger('role')->default(1);
            $table->string('code')->nullable();
            $table->timestamp('time_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('avatar');
            $table->dropColumn('role');
            $table->dropColumn('code');
            $table->dropColumn('time_code');
        });
    }
}
