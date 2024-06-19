<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beasiswa;
use App\Models\Favorite;

class DetailBeasiswaController extends Controller
{

    public function index($id)
    {
        $beasiswa = Beasiswa::findOrFail($id);
        $isFavorited = Favorite::where('id', $id)->exists();
        $favoriteId = null;
        if ($isFavorited) {
            $favorite = Favorite::where('id', $id)->first();
            $favoriteId = $favorite->id; // Assuming 'id' is the primary key
        }
        return view('DetailBeasiswa', compact('beasiswa', 'isFavorited', 'favoriteId'));
    }

    public function destroy($id)
    {
        $favorite = Favorite::findOrFail($id);
        $favorite->delete();
        return redirect()->back()->with('success', 'Favorit berhasil dihapus.');
    }
}
