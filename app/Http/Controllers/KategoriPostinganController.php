<?php

namespace App\Http\Controllers;

use App\Http\Requests\KategoriPostinganStoreRequest;
use App\Models\KategoriPostingan;
use Illuminate\Http\Request;

class KategoriPostinganController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = KategoriPostingan::paginate(50);

        return view('dashboard.kategori.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KategoriPostinganStoreRequest $request)
    {
        $data = $request->validated();

        if ($data) {
            KategoriPostingan::create($data);

            return redirect()->route('db.kategori');
        }else{
            return back()->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = KategoriPostingan::findOrFail($id);

        return view('dashboard.kategori.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KategoriPostinganStoreRequest $request, string $id)
    {
        $data = $request->validated();
        $find = KategoriPostingan::findOrFail($id);

        if ($data) {
            $find->update($data);

            return redirect()->route('db.kategori');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $find = KategoriPostingan::findOrFail($id);
        $find->delete();

        return redirect()->route('db.kategori');
    }
}