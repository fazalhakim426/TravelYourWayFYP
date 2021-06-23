<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
  
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('super_agent_id');
            $table->string('country_id');
            $table->string('state_id');
            $table->string('city_id');
            $table->string('name');
            $table->string('description');
            $table->string('address');

      

                    $table->softDeletes();
                    $table->foreign('super_agent_id')
                          ->references('id')
                          ->on('super_agents')
                          ->onDelete('cascade');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
