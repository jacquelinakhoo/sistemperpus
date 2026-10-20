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
    Schema::create('karyawan', function (Blueprint $table) {
    $table->id('IDKaryawan'); // Changed from IDPetugas
    $table->string('NamaKaryawan'); // Changed
    $table->string('NoTelp_K'); // Changed
    $table->string('Jabatan'); // Added
    $table->string('SesiKerja');
    $table->unsignedBigInteger('IDUser');
});
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugas');
    }
};
