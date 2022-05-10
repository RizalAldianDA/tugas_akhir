<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wargas', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nokk');
            $table->string('nama');
            $table->string('gender');
            $table->date('tanggal_lahir');
            $table->integer('rt');
            $table->integer('rw');
            $table->string('passwordwarga')->nullable();
            $table->string('nomorhp')->nullable();
            $table->text('alamat')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('wargas');
    }
}
