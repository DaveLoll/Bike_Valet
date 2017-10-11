<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Organization', function (Blueprint $table) {
            $table->increments('Org_ID');
            $table->string('Org_Name');
            $table->string('Org_Contact_First_Name');
            $table->string('Org_Contact_Last_Name');
            $table->string('Org_Address');
            $table->string('Org_Address_2')->nullable();
            $table->string('Org_City');
            $table->string('Org_State');
            $table->string('Org_Website')->nullable();
            $table->string('Org_Phone_Number');
            $table->string('Org_Email')->nullable();
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
        Schema::dropIfExists('Organization');
    }
}
