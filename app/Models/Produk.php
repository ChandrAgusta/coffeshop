<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'harga',
        'desc',
        'kategori',
        'linkFoto'
    ];

    protected $guarded=[
        'id'
    ];

    static function detail_produk($idProduk)
    {
        $data = Produk::where("id", $idProduk)->first();

        return $data;
    }
}
