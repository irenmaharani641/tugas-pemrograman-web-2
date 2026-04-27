<?php

use App\Http\Controllers\HelmController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HelmController::class, 'index']);

Route::get('/produk-helm', [HelmController::class,'index'])->name('produk-helm.index');
Route::get('/produk-helm/create', [HelmController::class,'create'])->name('produk-helm.create');
Route::post('produk-helm/store', [HelmController::class,'store'])->name('produk-helm.store');



