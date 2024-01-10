<?php

namespace App\Http\Controllers;

use App\Models\Pengadilan;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $rows = Jadwal::with('pengadilan')->get();
        return view('jadwal.index', compact('rows'));

    }

    public function create()
    {
        $pengadilans = Pengadilan::select('id', 'nama_pengadilan')->get();

        return view('jadwal.create', compact('pengadilans'));
    }

    public function store(Request $request)
    {

        // Simpan data
        Jadwal::create([
            'id_pengadilan' => $request->id_pengadilan,
            'tgl_sidang' => $request->tgl_sidang,
            'waktu_sidang' => $request->waktu_sidang,
            'jenis_perkara' => $request->jenis_perkara
        ]);

        // Set pesan alert
        $request->session()->flash('alert-success', 'Data berhasil disimpan!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('jadwal');
    }

    public function edit(string $id)
    {
        $row = Jadwal::findOrFail($id);
        $pengadilans = Pengadilan::select('id', 'nama_pengadilan')->get();

        return view('jadwal.edit', compact('row', 'pengadilans'));
    }

    public function update(Request $request, string $id)
    {
        $row = Jadwal::findOrFail($id);
        $row->update([
            'id_pengadilan' => $request->id_pengadilan,
            'tgl_sidang' => $request->tgl_sidang,
            'waktu_sidang' => $request->waktu_sidang,
            'jenis_perkara' => $request->jenis_perkara
        ]);

        // Set pesan alert
        $request->session()->flash('alert-success', 'Data berhasil diupdate!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('jadwal');
    }

    public function destroy(string $id)
    {
        $row = Jadwal::findOrFail($id);

        $row->delete();

        // Set pesan alert
        session()->flash('alert-success', 'Data berhasil dihapus!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('jadwal');
    }
}
