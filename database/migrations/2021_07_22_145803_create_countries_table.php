<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
            $table->string('ar_name', 128)->nullable()->default(null);
            $table->boolean('status')->default('1');
            $table->string('country_code', 10)->nullable()->default(null);
            $table->string('iso_code_2', 2);
            $table->string('iso_code_3', 3);
            $table->text('address_format');
            $table->boolean('postcode_required');
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
        Schema::dropIfExists('countries');
    }
}
