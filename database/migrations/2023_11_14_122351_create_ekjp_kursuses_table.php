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
        Schema::create('ekjp_kursuses', function (Blueprint $table) {
            $table->id();
            $table->string('kursus');
            $table->string('bidang');
            $table->string('tempoh');
            $table->string('yuran');
            $table->text('tarikh');
            $table->text('kandungan');
            $table->text('catatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ekjp_kursuss');
    }
};
