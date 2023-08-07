<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('master_rak', function (Blueprint $table) {
            $table->id();
            $table->string('kode_rk');
            $table->string('kode_gr');
            $table->string('codeqr');
            $table->string('nama');
            $table->integer('maksimal_subrak');
            $table->integer('total_subrak');
            $table->enum('status', ['active', 'inactive']);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_rak');
    }
};
