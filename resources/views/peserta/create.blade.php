@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Tambah Peserta Sidang</h5>
            <div class="col-sm-8">
                <form class="row g-3 mt-2" action="{{ url('peserta') }}" method="POST">
                    @csrf

                    
                    <div class="mb-3">
                        <label for="nama_peserta" class="form-label">Nama Peserta*</label>
                        <input type="text" class="form-control" id="nama_peserta" name="nama_peserta" placeholder="Inputkan Nama Peserta..." required>
                    </div>

                    <div class="mb-3">
                        <label for="id_jadwal" class="form-label">Tanggal Sidang*</label>
                        <select class="form-control" name="id_jadwal" id="id_jadwal">
                            <option value="">-- Pilih --</option>
                            @foreach($jadwals as $jadwal)
                            <option value="{{ $jadwal->id }}">{{ $jadwal->tgl_sidang }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="peran_peserta" class="form-label">Peran Peserta*</label>
                        <input type="text" class="form-control" id="peran_peserta" name="peran_peserta" placeholder="Inputkan Peran Peserta..." required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url('peserta') }}" class="btn btn-warning" >Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
