<?php

namespace App\Http\Controllers;

use App\Models\helm;
use Illuminate\Http\Request;

class HelmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    return view('produk-helm.index', [
        'title' => 'helm',
        'helm'=> helm::all(),
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(helm $helm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(helm $helm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, helm $helm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(helm $helm)
    {
        //
    }
}
