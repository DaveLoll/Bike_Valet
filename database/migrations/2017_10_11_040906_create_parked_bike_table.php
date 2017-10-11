<?php

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
