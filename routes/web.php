<?php

use App\Http\Controllers\HelmController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HelmController::class, 'index']);

Route::get('/produk-helm', [HelmController::class,'index'])->name('produk-helm.index');
Route::get('/produk-helm/create', [HelmController::class,'create'])->name('produk-helm.create');
Route::post('produk-helm/store', [HelmController::class,'store'])->name('produk-helm.store');
Route::get('/produk-helm/{Helm}/edit', [HelmController::class,'edit'])->name('produk-helm.edit');
Route::put('/produk-helm/{helm}', [HelmController::class,'update'])->name('produk-helm.update');
Route::delete('/produk-helm/{helm}', [HelmController::class,'destroy'])->name('produk-helm.destroy');

