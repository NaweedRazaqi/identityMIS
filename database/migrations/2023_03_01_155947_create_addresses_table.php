<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('profileID');
            $table->integer('provinceID');
            $table->integer('provinceIDEn');
            $table->string('district');
            $table->string('districtEn');
            $table->string('village');
            $table->string('villageEn');
            $table->date('imigratingDate');
            $table->integer('countryID');
            $table->string('city');
            $table->string('streetNo');
            $table->string('houseNo');
            $table->integer('createdBy');
            $table->string('modifiedby')->nullable();
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
        Schema::dropIfExists('addresses');
    }
}
