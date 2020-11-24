<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProject2020Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project2020', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('govid');
            $table->string('name_ar');
            $table->string('name_en');
            $table->integer('age');
            $table->boolean('saudi_owner');
            $table->string('employess_num');
            $table->string('incomes');
            $table->string('username');
            $table->string('job_title');
            $table->integer('mobile');
            $table->string('email');

            $table->string('dropdown1');
            $table->string('dropdown2');
            $table->string('dropdown3');
            $table->string('dropdown4');
            $table->string('dropdown5');
            $table->string('dropdown6');
            $table->string('dropdown7');
            $table->string('dropdown8');
            $table->string('dropdown9');

            $table->boolean('checkbox1');
            $table->boolean('checkbox2');
            $table->boolean('checkbox3');
            $table->boolean('checkbox4');
            $table->boolean('checkbox5');
            $table->boolean('checkbox6');
            $table->boolean('checkbox7');
            $table->boolean('checkbox8');

            $table->rememberToken();
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
        Schema::dropIfExists('project2020');
    }
}
