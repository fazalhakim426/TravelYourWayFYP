<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->string('agent_id')->nullable();
            $table->string('status');
            //Incomplete 
            // Completed
            // Payment Request
            // Paid
            // Cancel
            // Done
            $table->string('visa_apply_country');
            $table->string('type');  //visit immigration hajj ummrah
            $table->string('days')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('title')->nullable();
            $table->string('passport_number')->nullable();
            
            $table->string('passport_front_image')->nullable();
            $table->string('passport_back_image')->nullable();
            $table->string('cnic_front_image')->nullable();
            $table->string('cnic_back_image')->nullable();

             //contact information
            $table->string('country')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('work_phone')->nullable();
            $table->string('street')->nullable();
            //agent field
            $table->string('charges')->nullable();

            $table->string('instructions')
                  
            ->nullable();

            $table->string('documents')->nullable();
            $table->unsignedBigInteger('super_agent_id')->nullable();
            //asign by agent//show passenger details and passport details  
            
            $table->foreign('customer_id')
                  ->references('id')
                  ->on('customers')
                  ->onDelete('cascade');
                  
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
        Schema::dropIfExists('visas');
    }
}
