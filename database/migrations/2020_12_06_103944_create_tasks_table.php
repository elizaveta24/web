<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
			$table->string('title')->nullable();
			$table->integer('time')->nullable();
			$table->string('level')->nullable();
			$table->string('info')->nullable();
			$table->bigInteger('curs_id')->unsigned()->nullable();
			$table->foreign('curs_id')->references('id')->on('curs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
