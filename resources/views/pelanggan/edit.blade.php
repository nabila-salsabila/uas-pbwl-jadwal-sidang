    @extends('layouts.app')
    
    @section('content')
    <div class="container">
    <div class="card">
        <div class="card-body">
        <h5>Form Edit Pelanggan</h5>
        <div class="col-sm-6">
            <form class="row g-3 mt-2" action="{{ url('pelanggan/' . $pelanggan->id) }}" method="POST">
            <input type="hidden" name="_method" value="PATCH">
                @csrf

            <div class="form-group">
                <label for="pel_no" class="form-label">Nomor Pelanggan*</label>
                <input type="text" class="form-control" name="pel_no" id="pel_no" value="{{ $pelanggan->pel_no }}" placeholder="Nomor Pelanggan">
            </div>

            <div class="form-group">
                <label for="id_gol" class="form-label">Golongan*</label>
                <select class="form-control" name="id_gol" id="id_gol">
                    <option value="">-- Pilih --</option>
                    @foreach($golongans as $golongan)
                        <option value="{{ $golongan->id }}" {{ $pelanggan->id_gol == $golongan->id ? 'selected' : ''}}>{{ $golongan->gol_nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="pel_nama" class="form-label">Nama*</label>
                <input type="text" class="form-control" name="pel_nama" id="pel_nama" value="{{ $pelanggan->pel_nama }}" placeholder="Nama">
            </div>

            <div class="form-group">
                <label for="pel_alamat" class="form-label">Alamat*</label>
                <input type="text" class="form-control" name="pel_alamat" id="pel_alamat" value="{{ $pelanggan->pel_alamat }}" placeholder="Alamat">
            </div>

            <div class="form-group">
                <label for="pel_hp" class="form-label">Nomor hp*</label>
                <input type="text" class="form-control" name="pel_hp" id="pel_hp" value="{{ $pelanggan->pel_hp }}" placeholder="Nomor hp">
            </div>

            <div class="form-group">
                <label for="pel_ktp" class="form-label">KTP*</label>
                <input type="text" class="form-control" name="pel_ktp" id="pel_ktp" value="{{ $pelanggan->pel_ktp }}" placeholder="KTP">
            </div>

            <div class="form-group">
                <label for="pel_seri" class="form-label">Nomor seri*</label>
                <input type="text" class="form-control" name="pel_seri" id="pel_seri" value="{{ $pelanggan->pel_seri }}" placeholder="Nomor seri">
            </div>

            <div class="form-group">
                <label for="pel_meteran" class="form-label">Meteran*</label>
                <input type="text" class="form-control" name="pel_meteran" id="pel_meteran" value="{{ $pelanggan->pel_meteran }}" placeholder="Meteran">
            </div>

            <div class="form-group">
                <label for="status" class="form-label">Status*</label>
                <select class="form-control" name="status">
                    @foreach(['Aktif', 'Tidak Aktif'] as $option)
                        <option value="{{ $option }}" {{ $pelanggan['status'] == $option ? 'selected' : '' }}>{{ $option }}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="id_user" class="form-label">User*</label>
                <select class="form-control" name="id_user" id="id_user">
                <option value="">-- Pilih --</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ $pelanggan->id_user == $user->id ? 'selected' : ''}}>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" value="Update" class="btn btn-primary">
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
    @endsection
