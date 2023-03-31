<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjamans = Peminjaman::all();
        return view('halaman.data_peminjaman.index', compact('peminjamans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peminjamans = Peminjaman::select('id', 'nama_peminjam')->get();
        return view('halaman.data_peminjaman.create',  compact('peminjamans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tambahh = Peminjaman::create($request->all());
        return redirect()->route('halaman.data_peminjaman.index');
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
        $peminjamans = Peminjaman::findOrFail($id);
        return view('halaman.data_peminjaman.edit', compact('peminjamans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $peminjamans = Peminjaman::findOrFail($id);
        $peminjamans->update($request->all());
        return redirect()->route('halaman.data_peminjaman.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Peminjaman::where('id', $id)->delete();
        return redirect()->route('halaman.data_peminjaman.index');
    }
}