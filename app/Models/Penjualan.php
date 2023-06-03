<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penjualan extends Model
{
    use HasFactory;
    protected $fillable=[
        'tanggalPenjualan','customer_id'
    ];

    static function tambahTransaksi()
    {
        $user = Auth::user()->id;
        $data = Penjualan::create([
            "tanggalPenjualan"=>date("Y-m-d"),
            "customer_id" =>$user
        ]);

        return $data->id;
    }
}
