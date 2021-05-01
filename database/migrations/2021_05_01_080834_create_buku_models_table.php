<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku_models', function (Blueprint $table) {
            $table->id();
            $table->string('judul_buku');
            $table->string('kategory_id');
            $table->string('harga_buku');
            $table->string('deskripsi_buku');
            $table->string('penulis_buku');
            $table->string('penerbit_buku');
            $table->string('tahun_terbit');
            $table->string('gambar_buku');
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
        Schema::dropIfExists('buku_models');
    }
}
