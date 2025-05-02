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
        Schema::create('buku', function(Blueprint $buku) {
            $buku->id();
            $buku->text('nama_buku');
            $buku->enum('jenis' , ['cerita','dongeng','pelajaran','musik','sejarah']);
            $buku->date('tanggal');
            $buku->text('jumlah_buku');
            $buku->timestamps();
        });    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
