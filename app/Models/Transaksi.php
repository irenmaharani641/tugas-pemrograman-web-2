<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
        'kode_transaksi',
        'tanggal',
        'total_harga',
        'metode_pembayaran',
        'status',
        'toko_id'
    ];

    
    public function toko()
    {
        return $this->belongsTo(Toko::class);
    }
}
