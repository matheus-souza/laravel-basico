<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustumersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custumers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->string('city', 50);
            $table->string('state', 2);
            $table->dateTime('birthdate');
            $table->boolean('special_customer');
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
        Schema::dropIfExists('custumers');
    }
}
