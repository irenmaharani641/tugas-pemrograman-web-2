<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index(Request $request)
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
        ->paginate(6)
        ->withQueryString();

    return view('Transaksi.index', [
        'title' => 'Daftar Transaksi',
        'transaksis' => $transaksis,
        'keyword' => $keyword,
        'status' => $status,
    ]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tokos = Toko::all(); 
    return view('Transaksi.Create', [
        'title' => 'Tambah Transaksi',
        'tokos' => $tokos
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_transaksi' => 'required|string|max:50',
            'tanggal' => 'required|date',
            'total_harga' => 'required|numeric',
            'metode_pembayaran' => 'required|string|max:50',
            'status' => 'required|string|max:20',
            'toko_id' => 'required|exists:tokos,id',
        ]);

        Transaksi::create($validated);

        return redirect()->route('Transaksi.index')
                         ->with('success', 'Data transaksi berhasil ditambahkan!');
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
   public function edit($id)
{
    $transaksi = Transaksi::findOrFail($id);
    $tokos = Toko::all();

    return view('Transaksi.edit', [
        'title' => 'Ubah Transaksi',
        'transaksi' => $transaksi,
        'tokos' => $tokos
    ]);
}



    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        
{
     $request->validate([
            'kode_transaksi' => 'required',
            'tanggal' => 'required|date',
            'total_harga' => 'required|numeric',
            'metode_pembayaran' => 'required',
            'status' => 'required',
            'toko_id' => 'required|exists:tokos,id',
        ]);

        // Simpan perubahan
        $transaksi->update($request->all());

        return redirect()->route('Transaksi.index')
                         ->with('success', 'Data Transaksi berhasil diubah!');
}

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
       $transaksi->delete();

    return redirect()->route('Transaksi.index')
                     ->with('success', 'Data Transaksi berhasil dihapus!');  
    }
}
