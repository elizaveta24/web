<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersCursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_curs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
			$table->bigInteger('users_id')->unsigned()->nullable();
			$table->bigInteger('curs_id')->unsigned()->nullable();
            $table->foreign('curs_id')->references('id')->on('curs');
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_curs');
    }
}
