<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained();
            $table->unsignedBigInteger('supplier_id');
            $table->foreign('supplier_id')->references('id')->on('users');
            $table->enum('status' , [0,1,2,3,4,5])->default(1)->nullable();
            $table->json('products');
            $table->unsignedBigInteger('total');
            $table->unsignedBigInteger('min_price');
            $table->text('warranty_policy');
            $table->text('shipping_policy');
            $table->dateTime('end_date');
            $table->integer('delivery_duration');
            $table->boolean('is_reviewed')->default(false);
            $table->mediumText('notices')->nullable();
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
        Schema::dropIfExists('offers');
    }
}
