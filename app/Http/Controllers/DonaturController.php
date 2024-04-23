<?php

namespace App\Http\Controllers;

use App\Models\Donatur;
use Illuminate\Http\Request;

class DonaturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Donatur::paginate(20);
        
        return view('dashboard.donatur.index', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Donatur::with('donasi')->where('id', $id)->first();

        return view('dashboard.donatur.show', compact('data'));
    }
}
