<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisaPassengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visa_passengers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('visa_id');
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('date_of_birth');
            $table->string('passport_number');
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
        Schema::dropIfExists('visa_passengers');
    }
}
