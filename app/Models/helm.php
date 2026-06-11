<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\SoftDeletes;


class Helm extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['nama','merk','ukuran','warna','harga','stok','toko_id','deskripsi'];
    protected $casts = [
        'harga' => 'decimal:2',
        'stok' => 'integer',
    ];
}
