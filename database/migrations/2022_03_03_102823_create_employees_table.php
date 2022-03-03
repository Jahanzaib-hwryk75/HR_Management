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
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('alternativephone')->nullable();
            $table->string('selectcountry')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('division')->nullable();
            $table->string('positionname')->nullable();
            $table->string('dutytype')->nullable();
            $table->string('hiredate')->nullable();
            $table->string('terminationdate')->nullable();
            $table->string('terminationreason')->nullable();
            $table->string('voluntarytermination')->nullable();
            $table->string('rehiredate')->nullable();
            $table->string('ratetype')->nullable();
            $table->string('rate')->nullable();
            $table->string('payfrequency')->nullable();
            $table->string('payfrequencytext')->nullable();
            $table->string('homedepartment')->nullable();
            $table->string('homedepartmenttext')->nullable();
            $table->string('dateofbirth')->nullable();
            $table->string('gender')->nullable();
            $table->string('maritalstatus')->nullable();
            $table->string('workinstate')->nullable();
            $table->string('lineinstate')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('pictureupload')->nullable();
            $table->string('homeemail')->nullable();
            $table->string('homephone')->nullable();
            $table->string('businessphone')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('emergencycontact')->nullable();
            $table->string('emergencyhome')->nullable();
            $table->string('emergencycontactrelation')->nullable();
            $table->string('alteremergencycontact')->nullable();
            $table->string('alteremergencyphone')->nullable();
            $table->string('emails')->nullable();
            $table->string('password')->nullable();
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
