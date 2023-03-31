@extends('layouts.master')
@section('title', 'Edit Barang')

@section('content')


    <div class="container">
        <div class="col-md-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4" style="text-align: center;">Edit Barang</h3>


                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4"></h6>
                    <form class="row g-2" action="/data_barang/{{ $barangs->id }}" method="post">
                        @method('PUT')
                        @csrf

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ $barangs->nama }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bahan" class="form-label">Bahan</label>
                                <input type="text" class="form-control" id="bahan" name="bahan"
                                    value="{{ $barangs->bahan }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tahun" class="form-label">Tahun</label>
                                <input type="number" class="form-control" id="tahun" name="tahun"
                                    value="{{ $barangs->tahun }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jumlah" class="form-label">Jumlah</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah"
                                    value="{{ $barangs->jumlah }}">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="sumber" class="form-label">Sumber</label>
                            <input type="text" class="form-control" id="sumber" name="sumber"
                                value="{{ $barangs->sumber }}">
                        </div>

                        <div class="mb-3">
                            <label for="kondisi" class="form-label">Kondisi</label>
                            <input type="text" class="form-control" id="kondisi" name="kondisi"
                                value="{{ $barangs->kondisi }}">
                        </div>

                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan"
                                value="{{ $barangs->keterangan }}">
                        </div>

                        <button type="submit" name="submit" class="col-md-3 btn btn-primary text-right" id="btn-tambah"><i
                                class="fas fa-save"></i>Simpan</button>

                    </form>
                </div>


            </div>
        </div>
    </div>



@endsection
