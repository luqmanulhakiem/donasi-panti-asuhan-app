<?php

namespace App\Http\Controllers;

use App\Http\Requests\KonfigurasiUpdateRequest;
use App\Models\Konfigurasi;
use Illuminate\Http\Request;

class KonfigurasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Konfigurasi::first();

        return view('dashboard.konfigurasi.index', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KonfigurasiUpdateRequest $request)
    {
        $data = $request->validated();

        if ($data) {
            $find = Konfigurasi::first();
            $find->update($data);

            return redirect()->route('konfigurasi');
        }
    }

}
