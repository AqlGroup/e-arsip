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
        Schema::create('pemberkasan', function (Blueprint $table) {
            $table->id('kode_berkas');
            $table->string('codeqr');
            $table->integer('jumlah_surat');
            $table->date('tanggal_berkas');
            $table->unsignedBigInteger('kode_kat');
            $table->date('tanggal_penghapusan')->nullable();
            $table->enum('status', ['active', 'inactive']);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemberkasan');
    }
};
