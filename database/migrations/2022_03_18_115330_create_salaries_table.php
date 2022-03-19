<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->string('employeename')->nullable();
            $table->string('salarytype')->nullable();
            $table->string('basic')->nullable();
            $table->string('health')->nullable();
            $table->string('houserent')->nullable();
            $table->string('bonus')->nullable();
            $table->string('newaddition')->nullable();
            $table->string('pf')->nullable();
            $table->string('newdeduction')->nullable();
            $table->string('tax')->nullable();
            $table->string('grosssalary')->nullable();
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
        Schema::dropIfExists('salaries');
    }
}
