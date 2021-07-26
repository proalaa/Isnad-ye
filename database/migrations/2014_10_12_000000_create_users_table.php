<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('phone_number')->nullable();
            $table->mediumText('address')->nullable();
            $table->unsignedInteger('role')->default(0);
            $table->unsignedBigInteger('commercial_register_number')->nullable();
            $table->unsignedBigInteger('commercial_register_certificate')->nullable();
            $table->mediumText('licence')->nullable();
            $table->unsignedBigInteger('bank_account')->nullable();
//            $table->string('profileImage')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
