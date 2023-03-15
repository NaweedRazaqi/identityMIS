<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatedetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatedetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('profileID');
            $table->foreign('profileID')->references('id')->on('candidates');
            $table->unsignedBiginteger('provinceID');
            $table->foreign('provinceID')->references('id')->on('provinces');
            $table->string('district')->nullable();
            $table->string('districtEn')->nullable();
            $table->string('village')->nullable();
            $table->string('villageEn')->nullable();
            $table->date('imigratingDate');
            $table->unsignedBiginteger('countryID');
            $table->foreign('countryID')->references('id')->on('countries');
            $table->string('city')->nullable();
            $table->string('streetNo')->nullable();
            $table->string('houseNo')->nullable();
            $table->string('jobinAfg')->nullable();
            $table->string('jobinAfgEn')->nullable();
            $table->string('jobinforgn')->nullable();
            $table->string('jobinforgnEn')->nullable();
            $table->integer('phone')->nullable();
            $table->unsignedBiginteger('relativeTypeID');
            $table->foreign('relativeTypeID')->references('id')->on('relative_types');
            $table->string('firstname')->nullable();
            $table->string('firstnameEn')->nullable();
            $table->string('fathername')->nullable();
            $table->string('fathernameName')->nullable();
            $table->integer('IdentityNo')->nullable();
            $table->integer('pageNo')->nullable();
            $table->boolean('birthinforgn')->default(0);
            $table->boolean('nothavingID')->default(0);
            $table->boolean('lostID')->default(0);
            $table->boolean('burntID')->default(0);
            $table->boolean('dirverliscens')->default(0);
            $table->unsignedBiginteger('currentID');
            $table->foreign('currentID')->references('id')->on('current_I_D_S');
            $table->unsignedBiginteger('createdBy');
            $table->foreign('createdBy')->references('id')->on('users');
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
        Schema::dropIfExists('candidatedetails');
    }
}
