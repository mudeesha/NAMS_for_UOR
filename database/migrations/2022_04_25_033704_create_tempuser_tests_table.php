<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempuserTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempuser_tests', function (Blueprint $table) {
            $table->string('test_id')->primary();
            $table->string('designation_id');
            $table->foreign('designation_id')->references('designation_id')->on('designations');
            $table->string('test_name');
            $table->string('test_part');
            $table->string('test_type');
            $table->date('date');
            $table->TIME('time');
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
        Schema::dropIfExists('tempuser_tests');
    }
}
