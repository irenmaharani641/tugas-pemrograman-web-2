<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $fillable = ['nama', 'alamat', 'pemilik'];

    
    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}
