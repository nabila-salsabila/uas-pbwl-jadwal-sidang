<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index()
    {
        $rows = Peserta::with('jadwal')->get();
        return view('peserta.index', compact('rows'));

    }

    public function create()
    {
        $jadwals = Jadwal::select('id', 'tgl_sidang')->get();

        return view('peserta.create', compact('jadwals'));
    }

    public function store(Request $request)
    {

        // Simpan data
        Peserta::create([
            'id_jadwal' => $request->id_jadwal,
            'nama_peserta' => $request->nama_peserta,
            'peran_peserta' => $request->peran_peserta
        ]);

        // Set pesan alert
        $request->session()->flash('alert-success', 'Data berhasil disimpan!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('peserta');
    }

    public function edit(string $id)
    {
        $row = Peserta::findOrFail($id);
        $jadwals = Jadwal::select('id', 'tgl_sidang')->get();

        return view('peserta.edit', compact('row', 'jadwals'));
    }

    public function update(Request $request, string $id)
    {
        $row = Peserta::findOrFail($id);
        $row->update([
            'id_jadwal' => $request->id_jadwal,
            'nama_peserta' => $request->nama_peserta,
            'peran_peserta' => $request->peran_peserta
        ]);

        // Set pesan alert
        $request->session()->flash('alert-success', 'Data berhasil diupdate!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('peserta');
    }

    public function destroy(string $id)
    {
        $row = Peserta::findOrFail($id);

        $row->delete();

        // Set pesan alert
        session()->flash('alert-success', 'Data berhasil dihapus!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('peserta');
    }
}
