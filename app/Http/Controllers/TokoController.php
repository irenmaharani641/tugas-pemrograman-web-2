<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ambil keyword dari query string (?keyword=...)
        $keyword = request()->input('keyword');

        $tokos = Toko::query()
            ->when($keyword, function ($query, $keyword) {
                $query->where('nama', 'like', "%{$keyword}%")
                    ->orWhere('alamat', 'like', "%{$keyword}%")
                    ->orWhere('pemilik', 'like', "%{$keyword}%");
            })
            ->paginate(6)
            ->withQueryString();

        return view('Toko.index', [
            'title' => 'Data Toko',
            'tokos' => $tokos,
            'keyword' => $keyword, // ← tambahkan ini
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Toko.create', [
            'title' => 'Tambah Toko',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'pemilik' => 'required|string|max:255',
        ]);

        Toko::create($validated);

        return redirect()->route('Toko.index')->with('success', 'Data toko berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Toko $toko)
    {
        return view('Toko.show', [
            'title' => 'Detail Toko',
            'toko' => $toko,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Toko $toko)
    {
        return view('Toko.edit', [
            'title' => 'Edit Toko',
            'toko' => $toko
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Toko $toko)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'pemilik' => 'required|string|max:255',
        ]);

        $toko->update($validated);
        session()->forget('success');

        return redirect()->route('Toko.index')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Toko $toko)
    {
        $toko->delete();

        return redirect()->route('Toko.index')
            ->with('success', 'Data Berhasil Dihapus!');
    }
}