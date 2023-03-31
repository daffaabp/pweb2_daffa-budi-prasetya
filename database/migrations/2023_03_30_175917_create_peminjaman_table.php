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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam', 100)->nullable(false);
            $table->string('nama_barang', 100)->nullable();
            $table->integer('jumlah')->nullable(false);
            $table->date('tanggal_peminjaman')->nullable();
            $table->date('tanggal_pengembalian')->nullable();
            $table->string('kontak', 40)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
