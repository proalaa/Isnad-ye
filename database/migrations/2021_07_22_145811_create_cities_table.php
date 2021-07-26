<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->integer('country_id');
            $table->integer('zone_id');
            $table->string('name', 128)->default('');
            $table->string('ar_name', 128)->nullable()->default(null);
            $table->string('code', 32)->nullable()->default(null);
            $table->boolean('status')->default('1');
            $table->integer('priority')->default('0');
            $table->timestamps();
            $table->unique('name', 'name');

            $table->index('country_id', 'country_id');
            $table->index('zone_id', 'zone_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
