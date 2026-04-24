<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;


#[Fillable (['nama','ukuran','warna','harga','stok'])]
class helm extends Model
{
    /** @use HasFactory<\Database\Factories\HelmFactory> */
    use HasFactory;
    
    //protected $fillable = ['nama','ukuran','warna','harga','stok'];

    //protected $fillable = ['id']
}
