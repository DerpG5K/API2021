<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // CREATES TABLES
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->text('description');
            $table->string('priority');
            $table->dateTime('startDate')->nullable();
            $table->dateTime('endDate')->nullable();
            $table->dateTime('lockedUntil')->nullable();
            $table->string('lockedBy')->nullable();
            $table->unsignedBigInteger('categoryId')->nullable();
            $table->unsignedBigInteger('stateId');
            $table->unsignedBigInteger('userId');
            $table->boolean('isCustomer')->default(false);
            $table->timestamps();
        });

        Schema::create('ticket_categories', function (Blueprint $table) {
            $table->id();
            $table->string('categoryName');
            $table->timestamps();
        });

        Schema::create('ticket_states', function (Blueprint $table) {
            $table->id();
            $table->string('stateName');
            $table->timestamps();
        });

        Schema::create('ticket_files', function (Blueprint $table) {
            $table->id();
            $table->string('fileSource');
            $table->string('fileName');
            $table->string('fileType');
            $table->unsignedBigInteger('fileSize');
            $table->dateTime('timestamp');
            $table->unsignedBigInteger('ticketId');
            $table->unsignedBigInteger('userId');
            $table->boolean('isCustomer')->default(false);
            $table->timestamps();
        });

        Schema::create('ticket_logs', function (Blueprint $table) {
            $table->id();
            $table->dateTime('timestamp');
            $table->string('description');
            $table->string('logType');
            $table->dateTime('lastChanged');
            $table->unsignedBigInteger('ticketId');
            $table->unsignedBigInteger('userId');
            $table->boolean('isCustomer')->default(false);
            $table->timestamps();
        });


        // DEFINE FOREIGN KEY CONSTRAINTS
        Schema::table('tickets', function ($table) {
            $table->engine = 'InnoDB';
            $table->foreign('categoryId')->references('id')->on('ticket_categories');
            $table->foreign('stateId')->references('id')->on('ticket_states');
        });

        Schema::table('ticket_files', function ($table) {
            $table->engine = 'InnoDB';
            $table->foreign('ticketId')->references('id')->on('tickets');
        });

        Schema::table('ticket_logs', function ($table) {
            $table->engine = 'InnoDB';
            $table->foreign('ticketId')->references('id')->on('tickets');
        });

        // CAN'T CREATE A FK CONSTRAINT ON USERID BECAUSE IT CAN REFERENCE EITHER ONE OF TWO TABLES
        // AS PER THE ERD. WEIRD MODELING
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
        Schema::dropIfExists('ticket_categories');
        Schema::dropIfExists('ticket_states');
        Schema::dropIfExists('ticket_files');
        Schema::dropIfExists('ticket_logs');
    }
}
