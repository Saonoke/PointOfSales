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
            $table->string('item_name');
            $table->decimal('price');
            $table->integer('stock');
            $table->foreign('category_id')->references('id')->on('category');


        });
    }


    public function down(): void
    {
        Schema::dropIfExists('item');
    }
};
