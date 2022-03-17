<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('projectname');
            $table->string('clientname');
            $table->string('projectlead');
            $table->string('startdate');
            $table->string('enddate');
            $table->string('projectduration');
            $table->string('checkin')->nullable();
            $table->string('checkout')->nullable();
            $table->string('totaltime')->nullable();
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->timestamps();
            $table->foreign('employee_id')->references('id')->on('Projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
