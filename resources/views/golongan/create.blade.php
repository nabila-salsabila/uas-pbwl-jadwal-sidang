    @extends('layouts.app')
    
    @section('content')
    <div class="container"> 
    <div class="card">
        <div class="card-body">
        <h5>Form Tambah Golongan</h5>
        <div class="col-sm-6">
            <form class="row g-3 mt-2" action="{{ url('golongan') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="gol_kode" class="form-label">Kode*</label>
                <input type="text" class="form-control" name="gol_kode" id="gol_kode" placeholder="Kode">
            </div>

            <div class="form-group">
                <label for="gol_nama" class="form-label">Nama*</label>
                <input type="text" class="form-control" name="gol_nama" id="gol_nama" placeholder="Nama">
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
