<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 15);
            $table->string('names', 70);
            $table->string('last_names', 70);
            $table->string('address', 255);
            $table->string('email')->unique();
            $table->string('phone_number', 20)->unique();
            $table->string('password');
            $table->tinyInteger('status');
            $table->integer('iduserType');
            $table->integer('idcity');
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
        Schema::dropIfExists('users');
    }
}