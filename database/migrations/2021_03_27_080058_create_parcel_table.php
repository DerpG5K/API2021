<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcels', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('shipmentId')->unsigned()->nullable();
            $table->integer('flightId')->unsigned()->nullable();
            $table->integer('depAddressId')->unsigned()->nullable();
            $table->integer('destAddressId')->unsigned()->nullable();
            //$table->integer('customsId')->unsigned()->nullable();
            $table->integer('deliveryTypeId')->unsigned()->nullable();
            $table->integer('parcelTpeId')->unsigned()->nullable();
            $table->integer('parcelTypeId')->unsigned()->nullable();
            $table->string('trackingNumber');
            $table->integer('weight');
            $table->integer('height');
            $table->integer('width');
            $table->integer('length');
            $table->string('priority');
            $table->dateTime('departureTimeStamp');
            $table->dateTime('arrivalTimeStamp');
            $table->boolean('isAllocated');
            $table->boolean('insurance');
            $table->timestamps();

        });

        Schema::table('parcels', function ($table) {
            $table->engine = 'InnoDB';
            $table->foreign('flightId')->references('id')->on('flights');
            $table->foreign('shipmentId')->references('id')->on('shipments');
            $table->foreign('depAddressId')->references('id')->on('addresses');
            $table->foreign('destAddressId')->references('id')->on('addresses');
            //$table->foreign('customsId')->references('id')->on('customs');
            $table->foreign('deliveryTypeId')->references('id')->on('delivery_types');
            $table->foreign('parcelTpeId')->references('id')->on('parcel_tpes');
            $table->foreign('parcelTypeId')->references('id')->on('parcel_types');
        });
    }

//'departureTimeStamp',
//'arrivalTimeStamp',
//'isAllocated',
//'insurance',
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
