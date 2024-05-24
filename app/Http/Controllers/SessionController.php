<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index()
    {
        return view("sesi/index");
    }

    public function login(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'nama.required' => 'Nama wajib diisi!',
            'email.required' => 'Masukkan email Anda!',
            'email.email' => 'Masukkan email yang valid!',
            'password.required' => 'Masukkan password Anda!',
        ]);

        $credentials = $request->only('nama', 'email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->with('status', 'Login berhasil!');
        }

        return back()->withErrors([
            'loginError' => 'Nama, email atau password yang Anda masukkan salah.'
        ])->onlyInput('email', 'nama');
    }
}
