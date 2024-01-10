@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Edit Jadwal Sidang</h5>
            <div class="col-sm-8">
                <form class="row g-3 mt-2" action="{{ url('jadwal/' . $row->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PATCH">
                    @csrf

                    <div class="mb-3">
                        <label for="id_pengadilan" class="form-label">Pengadilan*</label>
                        <select class="form-control" name="id_pengadilan" id="id_pengadilan">
                            <option value="">-- Pilih --</option>
                            @foreach($pengadilans as $pengadilan)
                                <option value="{{ $pengadilan->id }}" {{ $row->id_pengadilan == $pengadilan->id ? 'selected' : ''}}>{{ $pengadilan->nama_pengadilan }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="tgl_sidang" class="form-label">Tanggal Sidang*</label>
                        <input type="date" class="form-control" id="tgl_sidang" name="tgl_sidang" value="{{ $row->tgl_sidang }}" placeholder="Inputkan Tanggal Sidang..." required>
                    </div>

                    <div class="mb-3">
                        <label for="waktu_sidang" class="form-label">Waktu Sidang*</label>
                        <input type="time" class="form-control" id="waktu_sidang" name="waktu_sidang" value="{{ $row->waktu_sidang }}" placeholder="Inputkan Waktu Sidang..." required>
                    </div>

                    <div class="mb-3">
                    <label for="jenis_perkara" class="form-label">Jenis Perkara*</label>
                    <select class="form-control" name="jenis_perkara" id="jenis_perkara">
                        <option value="">-- Pilih --</option>
                        <option value="perdata" {{ $row->jenis_perkara == 'perdata' ? 'selected' : '' }}>Perdata</option>
                        <option value="pidana" {{ $row->jenis_perkara == 'pidana' ? 'selected' : '' }}>Pidana</option>
                        <option value="tata usaha negara" {{ $row->jenis_perkara == 'tata usaha negara' ? 'selected' : '' }}>Tata Usaha Negara</option>
                        <option value="hubungan industrial" {{ $row->jenis_perkara == 'hubungan industrial' ? 'selected' : '' }}>Hubungan Industrial</option>
                            <option value="pailit dan kepailitan" {{ $row->jenis_perkara == 'pailit dan kepailitan' ? 'selected' : '' }}>Pailit dan Kepailitan</option>
                            <option value="tanah dan agraria" {{ $row->jenis_perkara == 'tanah dan agraria' ? 'selected' : '' }}>Tanah dan Agraria</option>
                            <option value="waris" {{ $row->jenis_perkara == 'waris' ? 'selected' : '' }}>Waris</option>
                            <option value="perlindungan konsumen" {{ $row->jenis_perkara == 'perlindungan konsumen' ? 'selected' : '' }}>Perlindungan Konsumen</option>
                    </select>
                </div>


                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ url('jadwal') }}" class="btn btn-warning" >Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
