<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitydetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identitydetails', function (Blueprint $table) {
            $table->id();
            $table->integer('profileID');
            $table->boolean('birthinforgn');
            $table->boolean('nothavingID');
            $table->boolean('lostID');
            $table->boolean('burntID');
            $table->boolean('dirverliscens');
            $table->unsignedBiginteger('currentID');
            $table->foreign('currentID')->references('id')->on('current_I_D_S');
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
        Schema::dropIfExists('identitydetails');
    }
}
