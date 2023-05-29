<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Autentikasi berhasil
            // $user = Auth::user();p
            return redirect()->route('user.dashboard');
        }else if (Auth::guard('owners')->attempt($credentials)) {
            return redirect()->route('owner.dashboard');
        }else if(Auth::guard('kasirs')->attempt($credentials)){
            return redirect()->route('kasir.dashboard');
        } else {
            // Autentikasi gagal
            return redirect()->back()->withErrors(['email' => 'Email atau kata sandi salah']);
        }
    }
}
