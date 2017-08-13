<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoChiTietLoai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietloai', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_type')->unsigned();
            $table->foreign('id_type')->references('id')->on('type_products');
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('chitietloai');
    }
}
