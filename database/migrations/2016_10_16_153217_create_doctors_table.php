<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150)->index();
            $table->string('email', 100)->unique();
            $table->date('birthday');
            $table->string('address', 150);
            $table->integer('city_id');
            $table->integer('state_id');
            $table->string('zipcode', 10);
            $table->string('Phone', 40)->nullable();
            $table->string('Phone_cel', 40)->nullable();
            $table->char('genre', 1)->default('M');
            $table->integer('crm');
            $table->char('crm_status', 2);
            $table->integer('status');
            $table->text('obs')->nullable();
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
        Schema::dropIfExists('doctors');
    }
}
