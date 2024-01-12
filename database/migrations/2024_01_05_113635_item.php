<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('item', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('item_name',50);
            $table->float('price');
            $table->integer('stock');
            $table->foreign('category_id')->references('id')->on('category');


        });
    }


    public function down(): void
    {
        Schema::dropIfExists('item');
    }
};
