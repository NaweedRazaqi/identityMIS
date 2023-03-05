<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('firstnameEn');
            $table->string('lastname');
            $table->string('lastnameEn');
            $table->string('fathername');
            $table->string('fathernameEn');
            $table->string('grandfathername');
            $table->string('grandfathernameEn');
            $table->unsignedBiginteger('placeofbirthID');
            $table->foreign('placeofbirthID')->references('id')->on('provinces');
            $table->unsignedBiginteger('placeofbirthIDEn');
            $table->foreign('placeofbirthIDEn')->references('id')->on('provinces');
            $table->unsignedBiginteger('martialstatusID');
            $table->foreign('martialstatusID')->references('id')->on('maritalstatuses');
            $table->unsignedBiginteger('maritalstatusIDEn');
            $table->foreign('maritalstatusIDEn')->references('id')->on('maritalstatuses');
            $table->date('dateofbirth');
            $table->unsignedBiginteger('genderID');
            $table->foreign('genderID')->references('id')->on('genders');
            $table->unsignedBiginteger('genderIDEn');
            $table->foreign('genderIDEn')->references('id')->on('genders');
            $table->float('hight')->nullable();;
            $table->string('eyecolor')->nullable();;
            $table->string('eyecolorEn')->nullable();;
            $table->string('skincolor')->nullable();;
            $table->string('skincolorEn')->nullable();;
            $table->string('otherIdent')->nullable();;
            $table->string('otherIdentEn')->nullable();;
            $table->string('photopath')->nullable();
            $table->unsignedBiginteger('currentID');
            $table->foreign('currentID')->references('id')->on('current_I_D_S');
            $table->unsignedBiginteger('currentIDEn');
            $table->foreign('currentIDEn')->references('id')->on('current_I_D_S');
            $table->unsignedBiginteger('reasonfornoID');
            $table->foreign('reasonfornoID')->references('id')->on('reasonforno_I_D_S');
            $table->unsignedBiginteger('reasonfornoIDEn');
            $table->foreign('reasonfornoIDEn')->references('id')->on('reasonforno_I_D_S');
            $table->unsignedBiginteger('createdBy');
            $table->foreign('createdBy')->references('id')->on('users');
            $table->string('modifiedBy');
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
        Schema::dropIfExists('candidates');
    }
}
