@extends('layouts.master')
@section('title', 'Tambah Peminjaman')

@section('content')


    <div class="container">
        <div class="col-md-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4" style="text-align: center;">Tambah Peminjaman</h3>


                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4"></h6>
                    <form class="row g-2" action="tambahh" method="POST">
                        @csrf

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
                                <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama_barang" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jumlah" class="form-label">Jumlah</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal_peminjaman" class="form-label">Tanggal Peminjaman</label>
                                <input type="date" class="form-control" id="tanggal_peminjaman" name="tanggal_peminjaman"
                                    required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_pengembalian" class="form-label">Tanggal Pengembalian</label>
                            <input type="date" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="kontak" class="form-label">Kontak</label>
                            <input type="text" class="form-control" id="kontak" name="kontak" required>
                        </div>

                        <button type="submit" name="submit" class="col-md-3 btn btn-primary text-right" id="btn-tambah"><i
                                class="fas fa-save"></i>Simpan</button>
                    </form>
                </div>


            </div>
        </div>
    </div>



@endsection
