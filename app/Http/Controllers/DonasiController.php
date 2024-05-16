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
            $donasi = Donasi::create([
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
            
            $donasi = Donasi::create([
                'id_donatur' => $create->id,
                'nominal' => $data['nominal'],
                'ket' => $data['ket'],
                'tanggal' => $data['tanggal'],
            ]);
        }

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        // SNAP
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $data['nominal'],
            )
        );
        
        try {
            $snapToken = \Midtrans\Snap::getSnapToken($params);
            $donasi->update([
                'snap_token' => $snapToken
            ]);
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            error_log($e->getMessage());
            // You can also return an error response if needed
            return response()->json(['error' => 'Failed to get snap token. Please check your server key and environment settings.']);
        }

        return redirect()->route('donasi.bayar', $donasi->id);
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
