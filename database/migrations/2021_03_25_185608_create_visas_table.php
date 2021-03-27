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
            $table->string('status');
            $table->string('charges')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->string('visa_apply_country');
            $table->string('days')->nullable();
            $table->string('arrival_date')->nullable();
            $table->string('type');
            $table->string('departure_airport');
            $table->string('arrival_airport');

            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('country_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('number_of_people')->nullable();

            $table->string('street_address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('work_phone')->nullable();
            $table->string('postal_code')->nullable();

            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('parent_location')->nullable();
            $table->string('language')->nullable();


            $table->string('passport_type')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('passport_issue_date')->nullable();
            $table->string('passport_expiry_date')->nullable();
            $table->string('passport_issue_country')->nullable();


            $table->string('degree_name')->nullable();
            $table->string('completion_date')->nullable();
            $table->string('employment_status')->nullable();
            $table->string('salary')->nullable();
            $table->string('job_location')->nullable();
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
