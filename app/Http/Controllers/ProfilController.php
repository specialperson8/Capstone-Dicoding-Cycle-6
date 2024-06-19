<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $email = session('email');
        $beasiswa = Beasiswa::where('email', $email)->get();
        return view('Profil', compact('beasiswa'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        try {
            $user = User::where('username', $request->username)->firstOrFail();
            $user->email = $request->email;
            $user->save();

            // Hapus session dan logout user
            auth()->logout();
            session()->flush();

            return redirect('/login')->with('success', 'Profil berhasil diperbarui. Silakan login kembali.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui profil.');
        }
    }
}
