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
        Schema::create('barang', function (Blueprint $table) {
        $table->id();
        $table->string('nama', 100)->nullable(false);
        $table->string('bahan', 50)->nullable();
        $table->integer('tahun')->nullable();
        $table->integer('jumlah')->nullable(false);
        $table->string('sumber', 50)->nullable();
        $table->string('kondisi', 50)->nullable();
        $table->string('keterangan', 50)->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};