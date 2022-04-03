<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemporaryUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporary_users', function (Blueprint $table) {
            $table->increments('emp_id');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('gender');
            $table->string('civil_status');
            $table->string('current_postal_address');
            $table->string('permenant_postal_address');
            $table->integer('current_mobile');
            $table->integer('permenant_mobile');
            $table->string('police_division');
            $table->string('email');
            $table->DATE('dob');
            $table->integer('age_as_at_closing_date');
            $table->string('citizenship');
            $table->string('nic');
            $table->string('driving_licen_no');
            $table->DATE('driving_licen_issuing_date');
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
        Schema::dropIfExists('temporary_users');
    }
}
