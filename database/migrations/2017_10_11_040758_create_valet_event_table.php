<?php
/*
     Filename:     2017_10_11_040906_create_valet_event_table.php
     Creator:      Kyle Fisher
     Create Date:  20171010
     Purpose:      The migration for the valet event table
     Log:
                   20171010:     Initial file creation.//KF
*/
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValetEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Valet_Event', function (Blueprint $table) {
            $table->increments('Valet_Event_ID');
            $table->integer('User_ID')->unsigned();
            $table->integer('Event_ID')->unsigned();

            $table->foreign('User_ID')->references('User_ID')->on('users');
            $table->foreign('Event_ID')->references('Event_ID')->on('Event');
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
        Schema::dropIfExists('Valet_Event');
    }
}
