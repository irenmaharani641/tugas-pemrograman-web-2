<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_transaksi',
        'tanggal',
        'total_harga',
        'metode_pembayaran',
        'status',
        'toko_id',
    ];

    // Relasi ke Toko
    public function toko()
    {
        return $this->belongsTo(Toko::class);
    }
}
