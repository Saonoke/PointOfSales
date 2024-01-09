<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('name',50);
            $table->string('email',50)->unique();
            $table->string('password',10);
            $table->enum('role', ['admin', 'kasir']);

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
