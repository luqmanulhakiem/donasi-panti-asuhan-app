<?php

namespace App\Http\Controllers;

use App\Models\AnakAsuh;
use App\Models\Donasi;
use App\Models\Donatur;
use App\Models\Gallery;
use App\Models\KategoriPostingan;
use App\Models\Kegiatan;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $postingan = Kegiatan::count();
        $kategori = KategoriPostingan::count();
        $galeri = Gallery::count();
        $donatur = Donatur::count();
        $anakAsuh = AnakAsuh::count();
        $pengurus = Pengurus::count();
        $riwayat = Donasi::with('donatur')->latest()->take(8)->get();

        return view('dashboard.index', compact([
            'postingan',
            'kategori',
            'galeri',
            'donatur',
            'anakAsuh',
            'pengurus',
            'riwayat',
        ]));
    }
}
