<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeSalaryHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_salary_histories', function (Blueprint $table) {
            $table->string('emp_id')->primary();
            $table->string('salary_scale_id');
            $table->foreign('salary_scale_id')->references('salary_scale_id')->on('salary_scales');
            $table->string('changed_date');
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
        Schema::dropIfExists('employee_salary_histories');
    }
}
