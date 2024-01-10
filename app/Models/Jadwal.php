<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'tb_jadwal'; 

    protected $fillable = [
        'id_pengadilan', 'tgl_sidang', 'waktu_sidang', 'jenis_perkara'
    ];

    public function pengadilan(): HasOne
    {
        return $this->hasOne(Pengadilan::class, 'id', 'id_pengadilan');
    }

}
