<?php

use App\Http\Controllers\HelmController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk-helm', [HelmController::class, 'index']);
Route::get('/produk-helm/create', [HelmController::class,'create']);

Route::get('produk-helm', function () {
    return view('produk-helm.index', ['title' => 'produk Helm']);
});

