<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_user_infos', function (Blueprint $table) {
          $table->increments('suser_info_id');
          $table->integer('f_userId');
          $table->string('gender')->nullable();
          $table->string('dob')->nullable();
          $table->string('currency_type')->nullable();
          $table->string('amount')->nullable();
          $table->string('service_category')->nullable();
          $table->string('time')->nullable();
          $table->string('people')->nullable();
          $table->string('start_date')->nullable();
          $table->string('end_date')->nullable();
          $table->string('image')->nullable();
          $table->string('total')->nullable();
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
        Schema::dropIfExists('service_user_infos');
    }
}
