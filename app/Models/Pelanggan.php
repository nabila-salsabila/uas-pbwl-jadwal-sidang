<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'tb_pelanggan'; 

    protected $fillable = [
        'id_gol', 'pel_no', 'pel_nama', 'pel_alamat', 'pel_hp', 'pel_ktp',
        'pel_seri', 'pel_meteran', 'pel_status', 'id_user'
    ];

    public function golongan(): HasOne
    {
        return $this->hasOne(Golongan::class, 'id', 'id_gol');
    }

    public function users(): HasOne
    {
        return $this->hasOne(Users::class, 'id', 'id_user');
    }
}
