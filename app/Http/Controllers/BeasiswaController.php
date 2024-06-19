<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    //
    public function index()
    {
        return view('formbeasiswa');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'namabeasiswa' => 'required|string|max:255',
                'deskripsi' => 'required|string',
                'kategori' => 'required|string',
                'deadline' => 'required|date',
                'syarat' => 'required|string',
                'tautan' => 'required|url',
                'poster' => 'required|file|mimes:pdf,png,jpg,jpeg|max:2048',
                'email' => 'required|email|max:255',
            ]);

            $poster = $request->file('poster');
            $posterName = time() . '_' . $poster->getClientOriginalName();
            $poster->move(public_path('posters'), $posterName);

            Beasiswa::create([
                'namabeasiswa' => $request->namabeasiswa,
                'deskripsi' => $request->deskripsi,
                'kategori' => $request->kategori,
                'deadline' => $request->deadline,
                'syarat' => $request->syarat,
                'tautan' => $request->tautan,
                'poster' => 'posters/' . $posterName, // Simpan path relatif ke public
                'email' => $request->email,
                'status' => $request->status,
            ]);

            return redirect()->back()->with('success', 'Terima kasih sudah mendaftarkan beasiswa silahkan cek secara berkala status pedaftaran anda di halaman profil anda');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Mohon maaf terjadi kesalahan, beasiswa tidak berhasil ditambahkan!');
        }
    }


    public function updateStatus(Request $request)
    {
        try {
            // Validate the incoming request data
            $request->validate([
                'id' => 'required|exists:beasiswas,id',
                'status' => 'required|string',
            ]);

            // Find the Beasiswa record by id
            $beasiswa = Beasiswa::findOrFail($request->id);

            // Update the status
            $beasiswa->status = $request->status;
            $beasiswa->save();

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Beasiswa berhasil diperbarui!');
        } catch (\Exception $e) {
            // Redirect back with an error message
            return redirect()->back()->with('error', 'Gagal memperbarui beasiswa!');
        }
    }

    public function destroy($id)
    {
        try {
            // Find the Beasiswa record by id
            $beasiswa = Beasiswa::findOrFail($id);

            // Delete the Beasiswa record
            $beasiswa->delete();

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Beasiswa berhasil dihapus!');
        } catch (\Exception $e) {
            // Redirect back with an error message
            return redirect()->back()->with('error', 'Gagal menghapus beasiswa!');
        }
    }

    public function search(Request $request)
    {
        $query = $request->input('q');
        $beasiswa = Beasiswa::where('namabeasiswa', 'LIKE', "%{$query}%")
            ->orWhere('kategori', 'LIKE', "%{$query}%")
            ->orWhere('deskripsi', 'LIKE', "%{$query}%")
            ->get();

        return view('DaftarBeasiswa', compact('beasiswa', 'query'));
    }

    public function filterByStatus($status)
    {
        // Melakukan query untuk mendapatkan data beasiswa berdasarkan status
        $beasiswa = Beasiswa::where('kategori', $status)->get();

        // Mengirim data beasiswas ke view
        return view('detailfilter', compact('beasiswa'));
    }
}