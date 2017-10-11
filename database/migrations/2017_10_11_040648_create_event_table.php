<?php
/*
     Filename:     2017_10_11_040648_create_event_table.php
     Creator:      Kyle Fisher
     Create Date:  20171010
     Purpose:      The migration for the event table
     Log:
                   20171010:     Initial file creation.//KF
*/
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Event', function (Blueprint $table) {
            $table->increments('Event_ID');
            $table->string('Event_Name');
            $table->integer('Org_ID')->unsigned();
            $table->date('Event_Date');
            $table->time('Event_Start_Time')->nullable();
            $table->time('Event_Stop_Time')->nullable();
            $table->string('Event_Address');
            $table->string('Event_Address_2')->nullable();
            $table->string('Event_City');
            $table->string('Event_State');
            $table->string('Event_Zip');
            $table->enum('Event_Status', ['Planned', 'Started', 'Stopped', 'Cancelled']);
            $table->timestamps();

            $table->foreign('Org_ID')->references('Org_ID')->on('Organization');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Event');
    }
}
