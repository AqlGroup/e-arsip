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
        Schema::create('pemindahan', function (Blueprint $table) {
            $table->id('kode_pemindahan');
            $table->string('kode_penempatan');
            $table->string('kode_gr_baru');
            $table->string('kode_rk_baru');
            $table->string('kode_srk_baru');
            $table->date('tanggal_pemindahan');
            $table->text('keterangan')->nullable();
            $table->enum('status', ['active', 'inactive']);

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemindahan');
    }
};
