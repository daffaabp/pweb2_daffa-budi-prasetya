<?php

namespace App\Http\Controllers;

use App\Models\Barang;

use Illuminate\Http\Request;
use App\Http\Requests\BarangCreateRequest;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('halaman.data_barang.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barangs = Barang::select('id', 'nama')->get();
        return view('halaman.data_barang.create',  compact('barangs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tambah = Barang::create($request->all());
        return redirect()->route('halaman.data_barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $barangs = Barang::findOrFail($id);
        return view('halaman.data_barang.edit', compact('barangs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $barangs = Barang::findOrFail($id);
        $barangs->update($request->all());
        return redirect()->route('halaman.data_barang.index');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Barang::where('id', $id)->delete();
        return redirect()->route('halaman.data_barang.index');
    }
}