<?php

namespace App\Http\Controllers;

use App\Models\Detail_Penjualan;
use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function addCart($idProduk)
    {
        $cart = session("cart");
        $produk = Produk::detail_produk($idProduk);
        
        $cart[$idProduk] = [
            "namaProduk" => $produk->name,
            "hargaProduk" => $produk->harga,
            "jumlah" => 1
        ];

        session(['cart'=> $cart]);

        return redirect('user/cart');
    }

    public function cart()
    {
        $cart = session("cart");
        return view('cart')->with('cart',$cart);
    }
    public function delCart($idProduk)
    {
        $cart = session("cart");
        unset($cart[$idProduk]);
        session(['cart'=>$cart]);
        return redirect('user/cart');
    }

    public function cekout()
    {
        $cart = session("cart");
        $idPenjualan = Penjualan::tambahTransaksi();

        foreach ($cart as $ct => $val) {
            $idProduct = $ct;
            $namaProduk  = $val['namaProduk'];
            $hargaProduk = $val['hargaProduk']*$val['jumlah'];
            $jumlah = $val['jumlah'];
            Detail_Penjualan::detailPenjualan($idProduct,$idPenjualan,$namaProduk,$jumlah,$hargaProduk);
        }
        session()->forget('cart');

        return redirect('user/cart');
    }
}



