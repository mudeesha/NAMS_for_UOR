<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->string('emp_id');
            $table->string('designation_id');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('gender');
            $table->string('current_address');
            $table->string('permenent_address');
            $table->integer('contact_no');
            $table->integer('permenent_contact_no');
            $table->integer('driving_licence_no');
            $table->integer('driving_licence_issuied_date');
            $table->string('department');
            $table->integer('current_salary');
            $table->integer('nic_no');
            $table->integer('dob');
            $table->string('citizenship');
            $table->integer('age_as_at_closing_date');
            $table->string('email');
            $table->string('police_devision');
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
};
