<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->date('date');
            $table->integer('segment', $autoIncrement = false, 5)->nullable();
            $table->text('description')->nullable();
            $table->enum('status', ['pending', 'finalized', 'canceled']);
            $table->integer('doctor_id', $autoIncrement = false, 11);
            $table->longText('Obs')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule');
    }
}
