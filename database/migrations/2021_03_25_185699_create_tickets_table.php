<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();

            
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('agent_id');
            
            $table->string('booking_source');
            $table->string('journey_type');  //signle round multi
            $table->string('issuing_airline');


            $table->string('ticket_apply_country');
            $table->string('departure_airport');
            $table->string('arrival_airport');
            $table->string('departure_date');
            $table->string('class');  //  business, first class ,  economy class 
           
              //agent field
            
              $table->string('PNR')->nullable();
              $table->string('base_fare')->nullable();
              $table->string('discount')->nullable();
              $table->string('total_payable')->nullable();
              $table->unsignedBigInteger('super_agent_id');//asign by agent//show passenger details and passport details
  
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
        Schema::dropIfExists('tickets');
    }
}
