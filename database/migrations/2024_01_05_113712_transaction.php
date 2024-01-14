<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->dateTime('transaction_date');
            $table->decimal('total_purchase');
            $table->decimal('total_payment');
            $table->decimal('change');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('transaction');
    }
};
