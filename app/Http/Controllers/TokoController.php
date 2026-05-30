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
    $keyword = request('keyword');

    $tokos = Toko::latest()
        ->when($keyword, function ($query, $keyword) {
            $query->where('nama', 'like', "%{$keyword}%")
                  ->orWhere('alamat', 'like', "%{$keyword}%")
                  ->orWhere('pemilik', 'like', "%{$keyword}%");
        }) // ← jangan pakai titik koma di sini
        ->paginate(6)
        ->withQueryString();

    return view('Toko.index', [
        'title' => 'Toko',
        'tokos' => $tokos,
        'search' => $keyword, // kirim keyword ke Blade
    ]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('Toko.create', [
        'title' => 'Tambah Toko'
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Toko $toko)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Toko $toko)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Toko $toko)
    {
        //
    }
}
