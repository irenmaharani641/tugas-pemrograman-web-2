<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class helm extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'ukuran', 'warna', 'harga', 'stok'];
}