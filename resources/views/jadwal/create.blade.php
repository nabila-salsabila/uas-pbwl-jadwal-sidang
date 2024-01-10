@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Tambah Jadwal Sidang</h5>
            <div class="col-sm-8">
                <form class="row g-3 mt-2" action="{{ url('jadwal') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="id_pengadilan" class="form-label">Pengadilan*</label>
                        <select class="form-control" name="id_pengadilan" id="id_pengadilan">
                            <option value="">-- Pilih --</option>
                            @foreach($pengadilans as $pengadilan)
                            <option value="{{ $pengadilan->id }}">{{ $pengadilan->nama_pengadilan }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="tgl_sidang" class="form-label">Tanggal Sidang*</label>
                        <input type="date" class="form-control" id="tgl_sidang" name="tgl_sidang" placeholder="Inputkan Tanggal Sidang..." required>
                    </div>

                    <div class="mb-3">
                        <label for="waktu_sidang" class="form-label">Waktu Sidang*</label>
                        <input type="time" class="form-control" id="waktu_sidang" name="waktu_sidang" placeholder="Inputkan Waktu Sidang..." required>
                    </div>

                    <div class="mb-3">
                        <label for="jenis_perkara" class="form-label">Jenis Perkara*</label>
                        <select class="form-control" name="jenis_perkara" id="jenis_perkara">
                            <option value="">-- Pilih --</option>
                            <option value="perdata">Perdata</option>
                            <option value="pidana">Pidana</option>
                            <option value="tata usaha negara">Tata Usaha Negara</option>
                            <option value="hubungan industrial">Hubungan Industrial</option>
                            <option value="pailit dan kepailitan">Pailit dan Kepailitan</option>
                            <option value="tanah dan agraria">Tanah dan Agraria</option>
                            <option value="waris">Waris</option>
                            <option value="perlindungan konsumen">Perlindungan Konsumen</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url('jadwal') }}" class="btn btn-warning" >Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
