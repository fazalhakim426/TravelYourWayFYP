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
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('agent_id')->nullable();
            $table->string('status');
            $table->string('visa_apply_country');
            $table->string('type');  //visit immigration hajj ummrah
            $table->string('days')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('title')->nullable();
            $table->string('passport_number')->nullable();
             //contact information
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('work_phone')->nullable();
            $table->string('street')->nullable();
            //agent field
            $table->string('charges')->nullable();
            $table->string('comments')->nullable();
            $table->unsignedBigInteger('super_agent_id')->nullable();
            //asign by agent//show passenger details and passport details            
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
