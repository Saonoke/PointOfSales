<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {

        Schema::create('member', function (Blueprint $table) {
            $table->id();
            $table->string('nama_member');
            $table->string('alamat');
            $table->string('no_hp')->unique();
            $table->integer('jumlah_poin');
            $table->date('masa_berlaku');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member');
    }
};
