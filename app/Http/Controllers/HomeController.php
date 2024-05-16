<?php

namespace App\Http\Controllers;

use App\Models\AnakAsuh;
use App\Models\Donasi;
use App\Models\Gallery;
use App\Models\Kegiatan;
use App\Models\Konfigurasi;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $profile = Konfigurasi::first();
        $data = Kegiatan::with('kategori')->latest()->take(4)->get();

        return view('halaman.index', compact('data', 'profile'));
    }
    public function kegiatan() {
        $profile = Konfigurasi::first();
        $data = Kegiatan::with('kategori')->latest()->paginate(9);
        
        return view('halaman.kegiatan', compact('data', 'profile'));
    }
    public function detailKegiatan(string $id) {
        $profile = Konfigurasi::first();

        $item = Kegiatan::where('id', $id)->first();
        return view('halaman.kegiatan-detail', compact('item', 'profile'));
    }
    public function anakasuh() {
        $profile = Konfigurasi::first();
        $data = AnakAsuh::get();
        
        return view('halaman.anakasuh', compact('data', 'profile'));
    }
    public function pengurus()
    {
        $profile = Konfigurasi::first();
        $data = Pengurus::get();
        return view('halaman.pengurus', compact('data', 'profile'));
    }
    public function galeri(){
        $profile = Konfigurasi::first();
        $data = Gallery::get();
        return view('halaman.galeri', compact('data', 'profile'));
    }
    public function sejarah(){
        $profile = Konfigurasi::first();
        return view('halaman.tentang', compact('profile'));
    }
    public function visiMisi(){
        $profile = Konfigurasi::first();
        return view('halaman.visiMisi', compact( 'profile'));
    }
    public function donasi(){
        $profile = Konfigurasi::first();
        return view('halaman.donasi', compact( 'profile'));
    }
    public function donasiBayar(string $id){
        $profile = Konfigurasi::first();
        $transaksi = Donasi::where('id', $id)->first();
        return view('halaman.bayar', compact( 'profile', 'transaksi'));
    }
    public function donasiSukses(string $id){
        $profile = Konfigurasi::first();
        $transaksi = Donasi::where('id', $id)->first();

        $transaksi->update([
            'status' => 'success'
        ]);
        return view('halaman.bayar-sukses', compact( 'profile', 'transaksi'));
    }
}
