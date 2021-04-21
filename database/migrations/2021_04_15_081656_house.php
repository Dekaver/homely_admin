<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class House extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('tipe');
            $table->string('lantai');
            $table->string('Sertifikasi');
            $table->integer('luas_tanah')->unsigned();
            $table->integer('luas_bangunan')->unsigned();
            $table->integer('harga')->unsigned();
            $table->string('alamat');
            $table->string('lokasi_gps');
            $table->string('deskripsi');
            $table->string('kontak');
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
        Schema::dropIfExists('houses');
    }
}
