<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Penjualan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_penjualan',
        'id_produk','nama_produk','jumlah','harga'
    ];

    static function detailPenjualan($idProduk, $idPenjualan, $namaProduk,$jumlah,$harga)
    {
        Detail_Penjualan::create([
            'id_penjualan'=>$idPenjualan,
            'id_produk'=>$idProduk,
            'nama_produk'=>$namaProduk,
            'jumlah'=>$jumlah,
            'harga'=>$harga
        ]);
    }
}
