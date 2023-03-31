<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $fillable = [
        'nama_peminjam',
        'nama_barang',
        'jumlah',
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'kontak'
    ];
}