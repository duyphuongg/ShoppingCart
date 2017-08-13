<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name');
            $table->string('password');
            $table->integer('id_phanquyen')->unsigned();
            $table->foreign('id_phanquyen')->references('id')->on('phanquyen');
            $table->timestamp('created_at')->nullable();
            $table->rememberToken()->nullable();
        });
        Schema::table('users', function (Blueprint $table){
            $table->rememberToken()->nullable();
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
