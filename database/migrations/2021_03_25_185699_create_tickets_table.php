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
            $table->unsignedBigInteger('agent_id')
                ->nullable();
            $table->string('status');
            //airline
            $table->string('booking_source');
            $table->string('issuing_airline');
            //trip detial
            $table->string('ticket_apply_country')
                ->nullable();
            $table->string('departure_airport')
                ->nullable();
            $table->string('arrival_airport')
                ->nullable();
            $table->string('departure_date')
                ->nullable();
            $table->string('class')
                ->nullable();  //  business, first class ,  economy class 
            $table->string('journey_type')
                ->nullable();  //signle round multi
            //agent field
            $table->string('PNR')
                ->nullable();
            $table->string('base_fare')
                ->nullable();
            $table->string('discount')
                ->nullable();
            $table->string('total_payable')
                ->nullable();
            $table->unsignedBigInteger('super_agent_id')
                ->nullable(); //asign by agent//show passenger details and passport details

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
