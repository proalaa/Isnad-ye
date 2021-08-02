<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilityOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voidproduct
     */
    public function up()
    {
        Schema::create('facility_order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('facility_id');
            $table->foreign('facility_id')->references('id')->on('users');
            $table->foreignId('order_id')->constrained();
            $table->boolean('is_owner')->default(false);
            $table->jsonb('products');
            $table->enum('status' , [0,1,2,3])->default(1); // 0 => 'closed' , 1 => 'pending' , 2 => 'agreed(paid)'
            $table->unsignedBigInteger('voted_for')->nullable();
            $table->foreign('voted_for')->references('id')->on('offers');
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
        Schema::dropIfExists('facility_order');
    }
}
