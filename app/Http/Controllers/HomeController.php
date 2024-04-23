<?php

namespace App\Http\Controllers;

use App\Models\AnakAsuh;
use App\Models\Gallery;
use App\Models\Kegiatan;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data = Kegiatan::with('kategori')->latest()->take(4)->get();

        return view('halaman.index', compact('data'));
    }
    public function kegiatan() {
        $data = Kegiatan::with('kategori')->latest()->paginate(9);

        return view('halaman.kegiatan', compact('data'));
    }
    public function anakasuh() {
        $data = AnakAsuh::get();
        
        return view('halaman.anakasuh', compact('data'));
    }
    public function pengurus()
    {
        $data = Pengurus::get();
        return view('halaman.pengurus', compact('data'));
    }
    public function galeri(){
        $data = Gallery::get();
        return view('halaman.galeri', compact('data'));
    }
}
