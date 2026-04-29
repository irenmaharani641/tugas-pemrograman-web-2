<?php

namespace App\Http\Controllers;

use App\Models\Helm;
use Illuminate\Http\Request;


class HelmController extends Controller 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    return view('produk-helm.index', [
        'title' => 'Poduk Helm',
        'Helms'=> Helm::all(), 
        ]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk-helm.create', ['title' => 'Create Helm']);
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $validated = $request->validate([
        'nama' => 'required|max:255',
        'ukuran' => 'required|max:255',
        'warna' => 'required|max:255',
        'harga' => 'required|numeric',
        'stok' => 'required|numeric'
    ], [ 
        'nama.required' => 'Nama Helm tidak boleh kosong',
        'ukuran.required' => 'Ukuran Helm tidak boleh kosong',
        'warna.required' => 'Warna Helm tidak boleh kosong',
        'harga.required' => 'Harga tidak boleh kosong',
        'stok.required' => 'Stok tidak boleh kosong',
    ]);


    Helm::create($validated);
    return redirect()->route('produk-helm.index')->with('success', 'Data berhasil ditambahkan');

    
    }

    /**
     * Display the specified resource.
     */
    public function show(Helm $Helm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Helm $Helm)
    {
        return view('produk-helm.edit', [
        'title' => ' edit produk Helm',
        'Helm'=> $Helm, 
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, helm $Helm)
    {
        $validated = $request->validate([
        'nama' => 'required|max:255',
        'ukuran' => 'required|max:255',
        'warna' => 'required|max:255',
        'harga' => 'required|numeric',
        'stok' => 'required|numeric'
    ], [ 
        'nama.required' => 'Nama elm tidak boleh kosong',
        'ukuran.required' => 'Ukuran Helm tidak boleh kosong',
        'warna.required' => 'Warna Helm tidak boleh kosong',
        'harga.required' => 'Harga tidak boleh kosong',
        'stok.required' => 'Stok tidak boleh kosong',
    ]);
    
    $Helm->update($validated);
    return redirect()->route('produk-helm.index')->with('success', 'Data Berhasil Diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Helm $Helm)
    {
        $Helm->delete($Helm);
        return redirect()->route('produk-helm.index')->with('success', 'Data berhasil dihapus');

    }
}
