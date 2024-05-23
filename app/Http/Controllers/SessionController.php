<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
        return view("sesi/index");
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Masukkan email Anda!',
            'email.email' => 'Masukkan email yang valid!',
            'password.required' => 'Masukkan password Anda!',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            Session::regenerate();
            return redirect()->intended('dashboard')->with('status', 'Login berhasil!');
        } else {
            return redirect('sesi/login')->withErrors([
                'email' => 'Email atau password yang Anda masukkan salah.'
            ])->withInput($request->only('email'));
        }
    }
}
