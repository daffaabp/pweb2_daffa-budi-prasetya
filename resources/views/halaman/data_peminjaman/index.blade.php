@extends('layouts.master')
@section('title', 'Data Peminjaman')

@section('content')


    <div class="container">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4" style="text-align: center;">Data Peminjaman</h3>

                <div class="tambah_data">
                    <a href="{{ route('halaman.data_peminjaman.create') }}"><button type="button"
                            class="btn btn-primary rounded-pill m-2">Tambah
                            Peminjaman</button></a>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Peminjam</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Tgl Peminjaman</th>
                                <th scope="col">Tgl Pengembalian</th>
                                <th scope="col">Kontak</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peminjamans as $peminjaman)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $peminjaman->nama_peminjam }}</td>
                                    <td>{{ $peminjaman->nama_barang }}</td>
                                    <td>{{ $peminjaman->jumlah }}</td>
                                    <td>{{ $peminjaman->tanggal_peminjaman }}</td>
                                    <td>{{ $peminjaman->tanggal_pengembalian }}</td>
                                    <td>{{ $peminjaman->kontak }}</td>
                                    <td>

                                        <a href="{{ route('halaman.data_peminjaman.edit', $peminjaman->id) }}"
                                            class="btn btn-primary"><i class="fas fa-edit"></i>
                                            Edit</a>

                                        <form action="peminjaman/{{ $peminjaman->id }}"
                                            onsubmit="return confirm('Yakin Anda Ingin Menghapus Data Ini?')"
                                            class="d-inline" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit" name='submit'>Delete</button>
                                        </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
