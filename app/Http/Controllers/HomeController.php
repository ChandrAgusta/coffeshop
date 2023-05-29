<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // public function index()
    // {
    //     if (Auth::user()->role === 'owner') {
    //         // Logika jika pengguna adalah owner
    //         return view('owner.dashboard');
    //     } else {
    //         // Logika jika pengguna adalah user
    //         return view('user.dashboard');
    //     }
    // }
    public function showUserDashboard()
    {
        $user = Auth::user();
        $product = Produk::all();
        return view('user.dashboard',['users'=>$user,'product'=>$product]);
    }

    public function showKasirDashboard()
    {
        return view('kasir.dashboard');
    }
    public function showOwnerDashboard()
    {
        return view('owner.dashboard');
    }
}
