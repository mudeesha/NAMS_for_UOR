<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignationChangeHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designation_change_histories', function (Blueprint $table) {
            $table->string('designation_id');
            $table->foreign('designation_id')->references('designation_id')->on('designations');
            $table->string('employee_id');
            $table->foreign('employee_id')->references('emp_id')->on('employees');
            $table->string('designation_description');
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
        Schema::dropIfExists('designation__change__histories');
    }
}
