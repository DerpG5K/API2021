<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Tracking_Nr');
            $table->float('weight');
            $table->float('width');
            $table->float('height')->nullable();
            $table->float('length');  //ERD: Height = Depth
            $table->string('FlightID')->references('id')->on('Flight') ;
            $table->string('Dep_Address');
            $table->integer('Dep_Nr');
            $table->integer('Dep_zip');
            $table->string('Dep_Country');
            $table->integer('priority');
            $table->integer('delivered');
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
        Schema::dropIfExists('packages');
    }
}
