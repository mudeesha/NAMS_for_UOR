<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempuserTestUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempuser_test_users', function (Blueprint $table) {
            $table->increments('application_id'); 
            $table->string('temptest_id');
            $table->integer('marks');
            $table->string('status');
            $table->timestamps();
            $table->foreign('application_id')->references('application_id')->on('temporary_users');
            $table->foreign('temptest_id')->references('test_id')->on('tempuser_tests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tempuser__test__users');
    }
}
