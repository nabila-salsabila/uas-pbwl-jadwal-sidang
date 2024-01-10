<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengadilan extends Model
{
    use HasFactory;

    protected $table = 'tb_pengadilan';
    protected $primaryKey = "id";
    protected $guarded = [];
}
