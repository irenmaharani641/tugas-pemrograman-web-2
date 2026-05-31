<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         function index(Request $request)
{
    $keyword = $request->input('keyword');
    $status  = $request->input('status');

    $transaksis = Transaksi::with('toko')
        ->when($keyword, function ($query, $keyword) {
            return $query->where('kode_transaksi', 'like', "%{$keyword}%")
                         ->orWhere('metode_pembayaran', 'like', "%{$keyword}%");
        })
        ->when($status, function ($query, $status) {
            return $query->where('status', $status);
        })
        ->paginate(10)
        ->withQueryString();

    return view('Transaksi.index', [
        'title' => 'Daftar Transaksi',
        'transaksis' => $transaksis,
        'keyword' => $keyword,
        'status' => $status,
    ]);
}

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
