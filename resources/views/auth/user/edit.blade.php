    @extends('layouts.app')
    
    @section('content')
    <div class="container">
    <div class="card">
        <div class="card-body">
        <h5>Form Edit User</h5>
        <div class="col-sm-6">
            <form class="row g-3 mt-2" action="{{ url('users/' . $row->id) }}" method="POST">
            <input type="hidden" name="_method" value="PATCH">
                @csrf

            <div class="form-group">
                <label for="name" class="form-label">Nama*</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $row->name }}" placeholder="Nama">
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email*</label>
                <input type="text" class="form-control" name="email" id="email" value="{{ $row->email }}" placeholder="Email">
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
