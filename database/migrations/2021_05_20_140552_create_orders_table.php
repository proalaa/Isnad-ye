<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('facility_id');
//            $table->foreign('facility_id')->references('id')->on('users');
//            $table->unsignedBigInteger('original_order_id')->nullable();
//            $table->foreign('original_order_id')->references('id')->on('orders');
            $table->dateTime('endDate')->nullable();
            $table->longText('details')->nullable();
            $table->boolean('is_shareable')->default(false);
            $table->dateTime('shareable_until')->nullable();
            $table->dateTime('open_until')->nullable();
            $table->foreignId('owner_id')->references('id')->on('users');
            $table->dateTime('votable_until')->nullable();
            $table->enum('status' ,[0,1,2,3,4,5])->default(1)->nullable();
            $table->boolean('is_reviewed')->default(false);
            $table->softDeletes();
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
        Schema::dropIfExists('orders');
    }
}
