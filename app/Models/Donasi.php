<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Donasi extends Model
{
    use HasFactory;

    protected $table = 'donasis';

    protected $fillable = [
        'user_id',
        'jumlah_donasi',
        'nama_barang',
        'kategori_barang',
        'detail_barang'
    ];

}
