<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnakAsuhStoreRequest;
use App\Models\AnakAsuh;
use Illuminate\Http\Request;

class AnakAsuhController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = AnakAsuh::paginate(50);

        return view('dashboard.anakAsuh.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.anakAsuh.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnakAsuhStoreRequest $request)
    {
        $data = $request->validated();

        if ($data) {
            AnakAsuh::create($data);

            return redirect()->route('db.anak-asuh');
        }else{
            return back()->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = AnakAsuh::findOrFail($id);

        return view('dashboard.anakAsuh.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AnakAsuhStoreRequest $request, string $id)
    {
        $data = $request->validated();
        $find = AnakAsuh::findOrFail($id);

        if ($data) {
            $find->update($data);

            return redirect()->route('db.anak-asuh');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $find = AnakAsuh::findOrFail($id);
        $find->delete();

        return redirect()->route('db.anak-asuh');
    }
}
