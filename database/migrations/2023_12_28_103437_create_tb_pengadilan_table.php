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
        Schema::create('tb_pengadilan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengadilan', 100);
            $table->string('alamat', 100);
            $table->string('telepon', 13);
            $table->string('email', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pengadilan');
    }
};
