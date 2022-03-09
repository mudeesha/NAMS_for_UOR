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
            $table->string('Emp_id');
            $table->string('Surname');
            $table->string('Fname');
            $table->string('Mname');
            $table->string('Lname');
            $table->string('Gender');
            $table->string('Civil_Status');
            $table->string('Current_Postal_Address');
            $table->string('Permenant_Postal_Address');
            $table->integer('Current_Mobile');
            $table->integer('Permenant_Mobile');
            $table->string('Police_Division');
            $table->string('Email');
            $table->DATE('DOB');
            $table->integer('Age_as_at_Closing_Date');
            $table->string('Citizenship');
            $table->string('NIC');
            $table->string('Driving_Licen_No');
            $table->string('Driving_Licen_Issuing_Date');
            $table->string('Department_Id');
            $table->integer('Current_Salary');
            $table->string('Designation_Id');
            $table->String('profile_photo_path');
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
