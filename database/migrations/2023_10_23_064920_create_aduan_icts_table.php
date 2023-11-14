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
        Schema::create('aduan_icts', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_aduan');
            $table->string('jenis_aset');
            $table->string('tahap_kerosakan');
            $table->string('lokasi_utama_kerosakan');
            $table->string('lokasi_terperinci_kerosakan')->nullable();
            $table->string('no_siri')->nullable();
            $table->string('pengguna_terakhir')->nullable();
            $table->string('nama_pelapor');
            $table->string('email_pelapor')->nullable();
            $table->string('phone_pelapor')->nullable();
            $table->string('jawatan_pelapor')->nullable();
            $table->string('perihal_kerosakan');
            $table->date('tarikh_kerosakan')->nullable();
            $table->date('tarikh_laporan');
            $table->string('gambar')->nullable();
            $table->string('status_pembaikan')->nullable();
            $table->string('anggaran_kos')->nullable();
            $table->string('kos_terdahulu')->nullable();
            $table->string('syor_tindakan')->nullable();
            $table->string('nama_peg_aset')->nullable();
            $table->string('jawatan_peg_aset')->nullable();
            $table->date('tarikh_tindakan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aduan_icts');
    }
};
