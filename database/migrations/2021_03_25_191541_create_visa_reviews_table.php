<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisaReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visa_reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('visa_id');
            $table->string('comments');
            $table->enum('rating', [1,2,3,4,5]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visa_reviews');
    }
}
