<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Helm extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'ukuran', 'warna', 'harga', 'stok'];

    protected $casts = [
        'harga' => 'decimal:2',
        'stok' => 'integer',
    ];
}
