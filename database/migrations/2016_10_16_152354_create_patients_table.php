<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->index();
            $table->string('address', 100);
            $table->integer('city_id', $autoIncrement = false, 5);
            $table->integer('state_id', $autoIncrement = false, 5);
            $table->string('zipcode', 10)->nullable();
            $table->string('Phone', 40)->nullable();
            $table->string('Phone_comercial', 40)->nullable();
            $table->string('Phone_cel', 40)->nullable();
            $table->integer('prof_id', $autoIncrement = false, 11)->nullable();
            $table->char('genre', 1)->default('M');
            $table->integer('height', $autoIncrement = false, 3)->nullable();
            $table->integer('weight', $autoIncrement = false, 3)->nullable();
            $table->date('birthday');
            $table->char('estado_civil', 1)->nullable();
            $table->string('pai', 100)->nullable();
            $table->string('mae', 100)->nullable();
            $table->string('prontuario', 15)->nullable();
            $table->integer('cpf', $autoIncrement = false, 20);
            $table->string('email', 100)->unique();
            $table->string('pass', 50)->nullable();
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
        Schema::dropIfExists('patients');
    }
}
