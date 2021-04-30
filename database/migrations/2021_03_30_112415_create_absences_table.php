<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employeeID');
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->string('reason');
            $table->timestamps();
        });
        //foreign keys
        Schema::table('absences', function ($table) {
            $table->engine = 'InnoDB';
            $table->foreign('employeeID')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absences');
    }
}
