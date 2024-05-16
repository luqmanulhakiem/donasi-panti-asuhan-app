<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Donatur;
use App\Models\Konfigurasi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class PdfController extends Controller
{
    public function index(string $id){
        $konfig = Konfigurasi::first();
        $donasi = Donasi::where('id', $id)->first();
        $donatur = Donatur::where('id', $donasi->id_donatur)->first();

        $data = [
            'konfig' => $konfig,
            'donasi' => $donasi,
            'donatur' => $donatur
        ];

        $pdf = Pdf::loadView('pdf.donasi', $data);
        return $pdf->download('donasi.pdf');
    } 
}
