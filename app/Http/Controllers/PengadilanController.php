<?php

namespace App\Http\Controllers;

use App\Models\Pengadilan;
use Illuminate\Http\Request;

class PengadilanController extends Controller
{
    public function index()
    {
        $rows = Pengadilan::all();

        return view('pengadilan.index', compact('rows'));
    }

    public function create()
    {
        return view('pengadilan.create');
    }

    public function store(Request $request)
    {
        // Simpan data
        Pengadilan::create([
            'nama_pengadilan' => $request->nama_pengadilan,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email
        ]);

        // Set pesan alert
        $request->session()->flash('alert-success', 'Data berhasil disimpan!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('pengadilan');
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
        $row = Pengadilan::find($id);
        return view('pengadilan.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Pengadilan::findOrFail($id);
        $row->update([
            'nama_pengadilan' => $request->nama_pengadilan,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email
        ]);

        // Set pesan alert
        $request->session()->flash('alert-success', 'Data berhasil diupdate!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('pengadilan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pengadilan::findOrFail($id);

        $row->delete();

        // Set pesan alert
        session()->flash('alert-success', 'Data berhasil dihapus!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('pengadilan');
    }
}
