<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcel_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('minWidth');
            $table->float('maxWidth');
            $table->float('minDepth');
            $table->float('maxDepth');
            $table->float('minHeigt');
            $table->float('maxHeight');
            $table->float('maxWeight');
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
        Schema::dropIfExists('parcel_types');
    }
}
