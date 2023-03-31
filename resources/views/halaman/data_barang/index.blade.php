@extends('layouts.master')
@section('title', 'Data Barang')

@section('content')


    <div class="container">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h3 class="mb-4" style="text-align: center;">Data Barang</h3>


                <div class="tambah_data">
                    <a href="{{ route('halaman.data_barang.create') }}"><button type="button"
                            class="btn btn-primary rounded-pill m-2">Tambah
                            Barang</button></a>
                </div>


                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Bahan</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Sumber</th>
                                <th scope="col">Kondisi</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barangs as $barang)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $barang->nama }}</td>
                                    <td>{{ $barang->bahan }}</td>
                                    <td>{{ $barang->tahun }}</td>
                                    <td>{{ $barang->jumlah }}</td>
                                    <td>{{ $barang->sumber }}</td>
                                    <td>{{ $barang->kondisi }}</td>
                                    <td>{{ $barang->keterangan }}</td>

                                    {{-- @if (auth()->users()->role_id == '1') --}}
                                    <td>
                                        <a href="{{ route('halaman.data_barang.edit', $barang->id) }}"
                                            class="btn btn-primary"><i class="fas fa-edit"></i>
                                            Edit</a>

                                        <form action="barang/{{ $barang->id }}"
                                            onsubmit="return confirm('Yakin Anda Ingin Menghapus Data Ini?')"
                                            class="d-inline" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit" name='submit'>Delete</button>
                                        </form>
                                </tr>
                                {{-- @else --}}
                                {{-- @endif --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
