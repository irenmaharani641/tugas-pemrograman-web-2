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
    Schema::create('Transaksis', function (Blueprint $table) {
    $table->id();
    $table->string('kode_transaksi');
    $table->date('tanggal');
    $table->integer('total_harga');
    $table->string('metode_pembayaran');
    $table->string('status');
    $table->foreignId('toko_id')->constrained('tokos')->onDelete('cascade');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Transaksis');
    }
};
