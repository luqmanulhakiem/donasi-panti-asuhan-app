<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonasiRequest;
use App\Models\Donasi;
use App\Models\Donatur;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DonasiRequest $request)
    {
        $data = $request->validated();

        $find = Donatur::where('email', 'LIKE', '%' . $data['email'] . '%')->first();
        $data['tanggal'] = Carbon::now()->format('Y-m-d');

        // return response()->json($data['tanggal']);

        if ($find) {
            Donasi::create([
                'id_donatur' => $find->id,
                'nominal' => $data['nominal'],
                'ket' => $data['ket'],
                'tanggal' => $data['tanggal'],
            ]);
        }else{
            $create = Donatur::create([
                'nama' => $data['nama'],
                'alamat' => $data['alamat'],
                'hp' => $data['hp'],
                'email' => $data['email'],
            ]);
            
            Donasi::create([
                'id_donatur' => $create->id,
                'nominal' => $data['nominal'],
                'ket' => $data['ket'],
                'tanggal' => $data['tanggal'],
            ]);
        }

        return redirect()->route('donasi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Donasi $donasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donasi $donasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donasi $donasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donasi $donasi)
    {
        //
    }
}
