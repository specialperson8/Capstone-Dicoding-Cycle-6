<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt($request->only('email', 'password'))) {
            return back()->with('error', 'Cek Kembali email dan password yang anda input');
        }

        // Ambil data pengguna yang telah login
        $user = Auth::user();

        // Simpan username dan email ke dalam session
        session(['username' => $user->username, 'email' => $user->email, 'id' => $user->id]);

        return redirect('home')->with('success', 'Selamat kamu berhasil login');
    }
}
