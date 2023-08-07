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
        Schema::create('penempatan', function (Blueprint $table) {
            $table->id('kode_penempatan');
            $table->string('codeqr');
            $table->string('kode_berkas');
            $table->string('kode_gr');
            $table->string('kode_rk');
            $table->string('kode_srk');
            $table->date('tanggal_penempatan');
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
        Schema::dropIfExists('penempatan');
    }
};
