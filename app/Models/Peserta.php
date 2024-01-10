<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $table = 'tb_peserta'; 

    protected $fillable = [
        'id_jadwal', 'nama_peserta', 'peran_peserta'
    ];

    public function jadwal(): HasOne
    {
        return $this->hasOne(Jadwal::class, 'id', 'id_jadwal');
    }

}
