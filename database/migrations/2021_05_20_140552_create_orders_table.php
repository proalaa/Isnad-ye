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
            $table->boolean('is_shareable')->default(false);
            $table->integer('share_duration')->nullable();
            $table->integer('open_duration')->nullable();
            $table->integer('vote_duration')->nullable();
            $table->foreignId('owner_id')->references('id')->on('users');
            $table->dateTime('votable_until')->nullable();
            $table->enum('status' ,[0,1,2,3,4,5])->default(1)->nullable();
            $table->boolean('is_reviewed')->default(false);
            $table->longText('details')->nullable();
            $table->timestamp('posted_at')->nullable();
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
