<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostinganStoreRequest;
use App\Models\KategoriPostingan;
use App\Models\Kegiatan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kegiatan::paginate(50);

        return view('dashboard.postingan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = KategoriPostingan::get();
        return view('dashboard.postingan.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostinganStoreRequest $request)
    {
        $data = $request->validated();
        $data['tanggal'] = Carbon::now()->format('Y-m-d');

        if ($data) {
            $filename = 'CDN-' . Str::random(10) . '.webp';
            $data['foto']->storeAs('public/postingan/',$filename);
            Kegiatan::create([
                'foto' => $filename,
                'judul' => $data['judul'],
                'desk' => $data['desk'],
                'tanggal' => $data['tanggal'],
            ]);

            return redirect()->route('db.postingan');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Kegiatan::findOrFail($id);
        $kategori = KategoriPostingan::get();


        return view('dashboard.postingan.edit', compact('data', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostinganStoreRequest $request, string $id)
    {
        $data = $request->validated();
        $find = Kegiatan::findOrFail($id);
        $data['tanggal'] = Carbon::now()->format('Y-m-d');

        if ($data) {
            if (isset($data["foto"])) {
                $oldFoto = public_path('storage/postingan/' . $find->foto);
                if (file_exists($oldFoto)) {
                    File::delete($oldFoto);
                }
                $data['foto']->storeAs('public/postingan/',$find->foto);
            }

            $find->update([
                'judul' => $data['judul'],
                'desk' => $data['desk'],
                'tanggal' => $data['tanggal'],
            ]);

            return redirect()->route('db.postingan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $find = Kegiatan::findOrFail($id);

        $oldFoto = public_path('storage/postingan/' . $find->foto);
        if (file_exists($oldFoto)) {
            File::delete($oldFoto);
            $find->delete();
        }

        return redirect()->route('db.postingan');
    }
}
