<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beasiswa;

class DaftarBeasiswaController extends Controller
{
    public function index()
    {
        $beasiswa = Beasiswa::where('status', 'diterima')->get();
        return view('daftarbeasiswa', compact('beasiswa'));
    }
}
