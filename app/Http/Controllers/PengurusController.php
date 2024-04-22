<?php

namespace App\Http\Controllers;

use App\Http\Requests\PengurusStoreRequest;
use App\Models\Pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pengurus::paginate(50);

        return view('dashboard.pengurus.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pengurus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PengurusStoreRequest $request)
    {
        $data = $request->validated();

        if ($data) {
            $filename = 'CDN-' . Str::random(10) . '.webp';
            $data['foto']->storeAs('public/pengurus/',$filename);
            Pengurus::create([
                'foto' => $filename,
                'nama' => $data['nama'],
                'jabatan' => $data['jabatan'],
                'hp' => $data['hp'],
            ]);

            return redirect()->route('db.pengurus');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Pengurus::findOrFail($id);

        return view('dashboard.pengurus.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PengurusStoreRequest $request, string $id)
    {
        $data = $request->validated();
        $find = Pengurus::findOrFail($id);

        if ($data) {
            if (isset($data["foto"])) {
                $oldFoto = public_path('storage/pengurus/' . $find->foto);
                if (file_exists($oldFoto)) {
                    File::delete($oldFoto);
                }
                $data['foto']->storeAs('public/pengurus/',$find->foto);
            }

            $find->update([
                'nama' => $data['nama'],
                'jabatan' => $data['jabatan'],
                'hp' => $data['hp'],
            ]);

            return redirect()->route('db.pengurus');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $find = Pengurus::findOrFail($id);

        $oldFoto = public_path('storage/pengurus/' . $find->foto);
        if (file_exists($oldFoto)) {
            File::delete($oldFoto);
            $find->delete();
        }

        return redirect()->route('db.pengurus');
    }
}
