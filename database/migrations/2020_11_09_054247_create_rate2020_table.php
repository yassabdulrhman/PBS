<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRate2020Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate2020', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('userID');
            $table->unsignedBigInteger('projectID');
            $table->foreign('userID')->references('id')->on('users');
            $table->foreign('projectID')->references('id')->on('project2020');
            $table->enum('rate', [0,1,2,3,4,5,6,7,8,9,10]);
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
        Schema::dropIfExists('rate2020');
    }
}
