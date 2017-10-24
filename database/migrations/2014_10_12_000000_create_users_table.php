<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User', function (Blueprint $table) {
            $table->increments('User_ID');
            $table->string('User_First_Name');
            $table->string('User_Last_Name');
            $table->string('User_Phone_Number');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('User_Role',['Valet', 'Lead Valet', 'Admin']);
            $table->enum('User_Status', ['Pre Registered', 'Registered', 'Terminated']);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
