<?php
/*
     Filename:     2017_10_11_040325_create_biker_table.php
     Creator:      Kyle Fisher
     Create Date:  20171010
     Purpose:      The migration for the biker table
     Log:
                   20171010:     Initial file creation.//KF
*/
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBikerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Biker', function (Blueprint $table) {
            $table->increments('Biker_ID');
            $table->string('Biker_Email', '225')->nullable();
            $table->string('Biker_Zip')->nullable();
            $table->string('Biker_First_Name');
            $table->string('Biker_Last_Name');
            $table->string('Biker_Phone_Number');
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
        Schema::dropIfExists('Biker');
    }
}
