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
        Schema::create('cabang', function(Blueprint $cabang) {
            $cabang->id();
            $cabang->text('nama_cabang',);
            $cabang->text('daerah',);
            $cabang->date('tanggal',);
            $cabang->text('jumlah_buku');
            $cabang->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cabang');
    }
};
