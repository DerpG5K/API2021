<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_benefits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jobID');
            $table->unsignedBigInteger('benefitID');
            $table->timestamps();
        });
        
        //foreign keys
        Schema::table('employees', function ($table) {
            $table->engine = 'InnoDB';
            $table->foreign('jobID')->references('benefits')->on('job_descriptions');
            $table->foreign('benefitID')->references('id')->on('benefits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_benefits');
    }
}
