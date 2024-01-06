<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kategori');
            $table->string('nama_barang');
            $table->float('harga');
            $table->integer('stok');
            $table->foreign('id_kategori')->references('id')->on('kategori');

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
