<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatives', function (Blueprint $table) {
            $table->id();
            $table->integer('profileID');
            $table->integer('relativeTypeID');
            $table->string('firstname');
            $table->string('firstnameEn');
            $table->string('fathername');
            $table->string('fathernameName');
            $table->integer('IdentityNo');
            $table->integer('pageNo')->nullable();
            $table->integer('createdBy');
            $table->string('modifiedBy')->nullable();
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
        Schema::dropIfExists('relatives');
    }
}
