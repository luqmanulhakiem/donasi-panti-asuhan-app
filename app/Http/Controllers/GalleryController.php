<?php

namespace App\Http\Controllers;

use App\Http\Requests\GaleriStoreRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Gallery::paginate(50);

        return view('dashboard.galeri.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GaleriStoreRequest $request)
    {
        $data = $request->validated();

        if ($data) {
            $filename = 'CDN-' . Str::random(10) . '.webp';
            $data['foto']->storeAs('public/galeri/',$filename);
            Gallery::create([
                'foto' => $filename,
                'desk' => $data['desk'],
            ]);

            return redirect()->route('db.galeri');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Gallery::findOrFail($id);

        return view('dashboard.galeri.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GaleriStoreRequest $request, string $id)
    {
        $data = $request->validated();
        $find = Gallery::findOrFail($id);

        if ($data) {
            if (isset($data["foto"])) {
                $oldFoto = public_path('storage/galeri/' . $find->foto);
                if (file_exists($oldFoto)) {
                    File::delete($oldFoto);
                }
                $data['foto']->storeAs('public/galeri/',$find->foto);
            }

            $find->update([
                'desk' => $data['desk'],
            ]);

            return redirect()->route('db.galeri');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $find = Gallery::findOrFail($id);

        $oldFoto = public_path('storage/galeri/' . $find->foto);
        if (file_exists($oldFoto)) {
            File::delete($oldFoto);
            $find->delete();
        }

        return redirect()->route('db.galeri');
    }
}
