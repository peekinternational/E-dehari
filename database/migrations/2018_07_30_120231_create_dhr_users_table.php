<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDhrUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dhr_users', function (Blueprint $table) {

              $table->increments('userId');
              $table->string('phone')->unique();
              $table->string('email')->unique()->nullable();
              $table->string('password');
              $table->string('type');
              $table->string('f_name')->nullable();
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
        Schema::dropIfExists('dhr_users');
    }
}
