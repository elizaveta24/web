<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
			$table->string('title')->nullable();
			$table->integer('cost')->nullable();
			$table->string('level')->nullable();
			$table->string('info')->nullable();
			$table->bigInteger('teachers_id')->unsigned()->nullable();
			$table->foreign('teachers_id')->references('id')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curs');
    }
}
