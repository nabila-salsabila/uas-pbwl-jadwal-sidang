<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;

class GolonganController extends Controller
{
    public function index()
    {
        $rows = Golongan::all();

        return view('golongan.index', compact('rows'));
    }

    public function create()
    {
        return view('golongan.create');
    }

    public function store(Request $request)
    {
        Golongan::create([
            'gol_kode' => $request->gol_kode,
            'gol_nama' => $request->gol_nama
        ]);

        return redirect('golongan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Golongan::find($id);
        return view('golongan.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Golongan::findOrFail($id);
        $row->update([
            'gol_kode' => $request->gol_kode,
            'gol_nama' => $request->gol_nama
        ]);

        return redirect('golongan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Golongan::findOrFail($id);

        $row->delete();

        return redirect('golongan');
    }
}
