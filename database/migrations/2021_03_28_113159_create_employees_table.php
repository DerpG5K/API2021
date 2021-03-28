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
            $table->id('ID');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('MailAdress');
            $table->string('PhoneNumber');
            $table->string('Password');
            $table->integer('Salary');
            $table->integer('Job');
            $table->dateTime('BirthDate');
            $table->boolean('isAdmin');
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
        Schema::dropIfExists('employees');
    }
}
