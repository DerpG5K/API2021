<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('departmentID');
            $table->boolean('available');
            $table->unsignedBigInteger('description');
            //UNKOWN DATATYPE
            //$table->###('hours');
            $table->float('pricePerHour');
            $table->timestamps();
        });
        //foreign keys
        Schema::table('jobs', function ($table) {
            $table->engine = 'InnoDB';
            $table->foreign('departmentID')->references('id')->on('departments');
            $table->foreign('description')->references('id')->on('job_descriptions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
