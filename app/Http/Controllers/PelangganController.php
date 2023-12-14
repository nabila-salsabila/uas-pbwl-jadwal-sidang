<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;
use App\Models\Golongan;
use App\Models\Users;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $rows = Pelanggan::with('golongan', 'users')->get();
        return view('pelanggan.index', compact('rows'));

    }

    public function create()
    {
        $golongans = Golongan::select('id', 'gol_nama')->get();
        $users = Users::select('id', 'name')->get();

        return view('pelanggan.create', compact('golongans', 'users'));
    }

    public function store(Request $request)
    {

        Pelanggan::create([
            'id_gol' => $request->id_gol,
            'pel_no' => $request->pel_no,
            'pel_nama' => $request->pel_nama,
            'pel_alamat' => $request->pel_alamat,
            'pel_hp' => $request->pel_hp,
            'pel_ktp' => $request->pel_ktp,
            'pel_seri' => $request->pel_seri,
            'pel_meteran' => $request->pel_meteran,
            'status' => $request->status,
            'id_user' => $request->id_user
        ]);

        return redirect('pelanggan');
    }

    public function edit(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $golongans = Golongan::select('id', 'gol_nama')->get();
        $users = Users::select('id', 'name')->get();

        return view('pelanggan.edit', compact('pelanggan', 'golongans', 'users'));
    }

    public function update(Request $request, string $id)
    {
        $row = Pelanggan::findOrFail($id);
        $row->update([
            'id_gol' => $request->id_gol,
            'pel_no' => $request->pel_no,
            'pel_nama' => $request->pel_nama,
            'pel_alamat' => $request->pel_alamat,
            'pel_hp' => $request->pel_hp,
            'pel_ktp' => $request->pel_ktp,
            'pel_seri' => $request->pel_seri,
            'pel_meteran' => $request->pel_meteran,
            'status' => $request->status,
            'id_user' => $request->id_user
        ]);

        return redirect('pelanggan');
    }

    public function destroy(string $id)
    {
        $row = Pelanggan::findOrFail($id);

        $row->delete();

        return redirect('pelanggan');
    }
}
