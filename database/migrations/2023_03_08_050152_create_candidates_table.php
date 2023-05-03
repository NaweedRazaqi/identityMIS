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
            $table->string('code');
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
            $table->unsignedBiginteger('martialstatusID');
            $table->foreign('martialstatusID')->references('id')->on('maritalstatuses');
            $table->date('dateofbirth');
            $table->unsignedBiginteger('genderID');
            $table->foreign('genderID')->references('id')->on('genders');
            $table->float('hight')->nullable();;
            $table->string('bornoutside')->nullable();
            $table->string('bornoutsideEn')->nullable();
            $table->unsignedBiginteger('skincolor_type');
            $table->foreign('skincolor_type')->references('id')->on('skin_colors');
            $table->unsignedBiginteger('eyecolor_type');
            $table->foreign('eyecolor_type')->references('id')->on('eye_colors');
            $table->unsignedBiginteger('haircolor_type');
            $table->foreign('haircolor_type')->references('id')->on('hair_colors');
            $table->string('bornoutsideEn')->nullable();
            $table->string('otherIdent')->nullable();
            $table->string('otherIdentEn')->nullable();
            $table->string('photopath')->nullable();
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
