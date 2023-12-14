    @extends('layouts.app')
    
    @section('content')
    <div class="container">
    <div class="card">
        <div class="card-body">
        <h5>Form Tambah Pelanggan</h5>
        <div class="col-sm-6">
            <form class="row g-3 mt-2" action="{{ url('pelanggan') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="pel_no" class="form-label">Nomor Pelanggan*</label>
                <input type="text" class="form-control" name="pel_no" id="pel_no" placeholder="Nomor Pelanggan">
            </div>

            <div class="form-group">
                <label for="id_gol" class="form-label">Golongan*</label>
                <select class="form-control" name="id_gol" id="id_gol">
                    <option value="">-- Pilih --</option>
                    @foreach($golongans as $golongan)
                    <option value="{{ $golongan->id }}">{{ $golongan->gol_nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="pel_nama" class="form-label">Nama*</label>
                <input type="text" class="form-control" name="pel_nama" id="pel_nama" placeholder="Nama">
            </div>

            <div class="form-group">
                <label for="pel_alamat" class="form-label">Alamat*</label>
                <input type="text" class="form-control" name="pel_alamat" id="pel_alamat" placeholder="Alamat">
            </div>

            <div class="form-group">
                <label for="pel_hp" class="form-label">Nomor hp*</label>
                <input type="text" class="form-control" name="pel_hp" id="pel_hp" placeholder="Nomor hp">
            </div>

            <div class="form-group">
                <label for="pel_ktp" class="form-label">KTP*</label>
                <input type="text" class="form-control" name="pel_ktp" id="pel_ktp" placeholder="KTP">
            </div>

            <div class="form-group">
                <label for="pel_seri" class="form-label">Nomor seri*</label>
                <input type="text" class="form-control" name="pel_seri" id="pel_seri" placeholder="Nomor seri">
            </div>

            <div class="form-group">
                <label for="pel_meteran" class="form-label">Meteran*</label>
                <input type="text" class="form-control" name="pel_meteran" id="pel_meteran" placeholder="Meteran">
            </div>

            <div class="form-group">
                <label for="status" class="form-label">Status*</label>
                <select class="form-control" name="status" id="status">
                    <option value="">-- Pilih --</option>
                    <option value="Aktif" {{ old('status') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="Tidak Aktif" {{ old('status') == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
            </div>

            <div class="form-group">
                <label for="id_user" class="form-label">User*</label>
                <select class="form-control" name="id_user" id="id_user">
                    <option value="">-- Pilih --</option>
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
    @endsection
