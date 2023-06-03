<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {        
        $menu = Produk::all();
        return view('menu', [ 'product' => $menu, 'title' => 'menu']);
    }

    public function showMenuUser()
    {
        $user = Auth::user();
        $menu = Produk::all();        
        return view('menu', ['users' => $user, 'product' => $menu, 'title' => 'user/menu']);
    }

    public function searchMenu(Request $request)
    {
        $keyword = $request->input('keyword');

        $menu = Produk::where('name', 'like', "%$keyword%")            
            ->get();

        return view('search', compact('menu'));
    }

 
}
