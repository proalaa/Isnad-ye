<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferFacilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Voting Table
        Schema::create('offer_facility', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('facility_id');
            $table->foreign('facility_id')->references('id')->on('users');
            $table->foreignId('offer_id')->constrained();
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
        Schema::dropIfExists('offer_facility');
    }
}
