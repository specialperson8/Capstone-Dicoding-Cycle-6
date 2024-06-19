<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beasiswa;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function index()
    {
        $beasiswa = Beasiswa::all();
        $user = User::all();
        return view('admin/dashboard', compact('beasiswa', 'user'));
    }

    public function tabel_beasiswa()
    {
        $beasiswa = Beasiswa::all();
        return view('admin/tabel-beasiswa', compact('beasiswa'));
    }

    public function tabel_user()
    {
        $user = User::all();
        return view('admin/tabel-pengguna', compact('user'));
    }

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if (session('email') !== 'admin@gmail.com') {
                return redirect('/');
            }
            return $next($request);
        });
    }
}
