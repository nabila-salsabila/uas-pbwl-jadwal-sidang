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
        Schema::create('tb_jadwal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pengadilan');
            $table->date('tgl_sidang');
            $table->time('waktu_sidang');
            $table->string('jenis_perkara', 50);
            $table->foreign('id_pengadilan')->references('id')->on('tb_pengadilan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_jadwal');
    }
};
