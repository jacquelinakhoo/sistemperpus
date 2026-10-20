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
    Schema::create('denda', function (Blueprint $table) {
        $table->id('IDDenda');
        $table->unsignedBigInteger('IDPeminjaman');
        $table->string('AlasanDenda');
        $table->string('JumlahDenda');
        $table->string('StatusBayar');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denda');
    }
};
