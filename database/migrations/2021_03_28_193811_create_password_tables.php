<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_passwords', function (Blueprint $table) {
            $table->id();
            $table->string('password');
            $table->unsignedBigInteger('customerId')->nullable();
            $table->timestamps();
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('selector');
            $table->string('token');
            $table->dateTime('expires');
            $table->unsignedBigInteger('customerId')->nullable();
            $table->timestamps();
        });

        Schema::table('customer_passwords', function ($table) {
            $table->engine = 'InnoDB';
            $table->foreign('customerId')->references('id')->on('customers');
        });

        Schema::table('password_resets', function ($table) {
            $table->engine = 'InnoDB';
            $table->foreign('customerId')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_passwords');
    }
}
