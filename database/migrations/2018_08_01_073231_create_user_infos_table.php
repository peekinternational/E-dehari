<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
          $table->increments('info_id');
          $table->integer('f_userId');
          $table->string('nationality')->nullable();
          $table->string('gender')->nullable();
          $table->string('dob')->nullable();
          $table->string('skill')->nullable();
          $table->string('education')->nullable();
          $table->string('experience', 500)->nullable();
          $table->string('availability')->nullable();
          $table->string('currency_type')->nullable();
          $table->string('amount')->nullable();
          $table->string('wages')->nullable();
          $table->string('location')->nullable();
          $table->string('image')->nullable();
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
        Schema::dropIfExists('user_infos');
    }
}
