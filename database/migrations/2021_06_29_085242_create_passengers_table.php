<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passengers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('date_of_birth');
            $table->string('passport_number');
            
            $table->string('passport_front_image')->nullable();
            $table->string('passport_back_image')->nullable();
            $table->string('cnic_front_image')->nullable();
            $table->string('cnic_back_image')->nullable();
            
            $table->string('nationality');
            $table->string('pax_type');//adult kid
            $table->string('passengerable_type')->nullable();
            $table->string('passengerable_id')->nullable();

            
            // $table->foreign('customer_id')
            // ->references('id')
            // ->on('customers')
            // ->onDelete('cascade');

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
        Schema::dropIfExists('passengers');
    }
}
