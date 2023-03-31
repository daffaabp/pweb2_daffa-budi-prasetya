@extends('layouts.master')
@section('title', 'Tambah Barang')

@section('content')


    <div class="container">
        <div class="col-md-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4" style="text-align: center;">Tambah Barang</h3>


                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4"></h6>
                    <form class="row g-2" action="tambah" method="POST">
                        @csrf

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bahan" class="form-label">Bahan</label>
                                <input type="text" class="form-control" id="bahan" name="bahan" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tahun" class="form-label">Tahun</label>
                                <input type="number" class="form-control" id="tahun" name="tahun" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jumlah" class="form-label">Jumlah</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="sumber" class="form-label">Sumber</label>
                            <input type="text" class="form-control" id="sumber" name="sumber" required>
                        </div>

                        <div class="mb-3">
                            <label for="kondisi" class="form-label">Kondisi</label>
                            <input type="text" class="form-control" id="kondisi" name="kondisi" required>
                        </div>

                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                        </div>

                        <div class="kembali">
                            <a href="{{ route('halaman.data_barang.index') }}"><button type="button"
                                    class="btn btn-primary ">Kembali</button></a>
                        </div>

                        <button type="submit" name="submit" class="col-md-12 btn btn-primary" id="btn-tambah"><i
                                class="fas fa-save"></i>Simpan</button>
                    </form>
                </div>


            </div>
        </div>
    </div>



@endsection
