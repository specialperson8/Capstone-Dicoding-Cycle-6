<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function store(Request $request)
    {
        try {
            if (!Auth::check()) {
                // Jika pengguna tidak login, kembalikan dengan Sweet Alert error
                return redirect()->back()->with('alert', 'Pastikan kamu sudah login ya!');
            }

            $favorite = Favorite::create($request->all());
            return redirect()->back()->with('success', 'Berhasil disimpan ke favorit!');
        } catch (\Exception $e) {
            // Jika terjadi error lain, kembalikan dengan Sweet Alert error
            return redirect()->back()->with('alert', 'Terjadi kesalahan, coba lagi nanti.');
        }
    }

    public function index()
    {
        $username = session('username'); // Assuming 'username' is the key for the username in the session
        $favorites = Favorite::where('username', $username)->get(); // Add a where clause to filter favorites by the session username
        return view('DaftarFavorit', compact('favorites'));
    }
}
