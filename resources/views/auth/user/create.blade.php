    @extends('layouts.app')
    
    @section('content')
    <div class="container">
    <div class="card">
        <div class="card-body">
        <h5>Form Tambah User</h5>
        <div class="col-sm-6">
            <form class="row g-3 mt-2" action="{{ url('users') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name" class="form-label">Nama*</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nama">
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email*</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Password*</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
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
