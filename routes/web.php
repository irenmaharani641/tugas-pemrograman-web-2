<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('produk-helm', function () {
    return view('produk-helm.index', ['title' => 'Helm']);
});

Route::get('produk-helm/create', function () {
    return view('produk-helm.create', ['title' => 'Create Helm']);
});
