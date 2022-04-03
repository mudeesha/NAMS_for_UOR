<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempSystemUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_system_users', function (Blueprint $table) {
            $table->increments('temp_id');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->string('contact_no');
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->string('postel_code');
            $table->string('district');
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
        Schema::dropIfExists('temp_system_users');
    }
}
