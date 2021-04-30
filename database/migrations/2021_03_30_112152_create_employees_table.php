<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employeeFirstName');
            $table->string('employeeLastName');
            $table->string('employeeMailAddress');
            $table->string('employeePhoneNumber');
            $table->unsignedBigInteger('employeeCredsId');
            $table->integer('employeeSalary');
            $table->unsignedBigInteger('employeeJobID');
            $table->dateTime('employeeBirthDate');
            $table->boolean('employeeIsAdmin');

            $table->timestamps();
        });
        //foreign keys
        Schema::table('employees', function ($table) {
            $table->engine = 'InnoDB';
            $table->foreign('employeeJobID')->references('id')->on('jobs');
            $table->foreign('employeeCredsID')->references('id')->on('employee_creds');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
