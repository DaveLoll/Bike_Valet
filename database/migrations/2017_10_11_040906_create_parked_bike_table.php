<?php
/*
     Filename:     2017_10_11_040906_create_parked_bike_table.php
     Creator:      Kyle Fisher
     Create Date:  20171010
     Purpose:      The migration for the parked bike table
     Log:
                   20171010:     Initial file creation.//KF
*/
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParkedBikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Parked_Bike', function (Blueprint $table) {
            $table->increments('Parked_Bike_ID');
            $table->integer('Event_ID')->unsigned();
            $table->string('Ticket')->nullable();
            $table->integer('Tag_Number');
            $table->string('Comment')->nullable();
            $table->integer('Biker_ID')->unsigned();
            $table->enum('Status', ['Checked In', 'Checked Out', 'Other']);

            $table->foreign('Event_ID')->references('Event_ID')->on('Event');
            $table->foreign('Biker_ID')->references('Biker_ID')->on('Biker');
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
        Schema::dropIfExists('Parked_Bike');
    }
}
