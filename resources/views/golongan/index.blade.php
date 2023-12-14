    @extends('layouts.app')
    
    @section('content')
    <div class="container">
    <div class="card">
        <div class="card-body">
        <h5>Data Golongan</h5>
        <a href="{{ url('golongan/create') }}" class="btn btn-primary mb-3 float-end">Tambah Baru</a>

        <table class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col">Kode</th>
                <th scope="col">Nama</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($rows as $golongan)
            <tr>
                <th class="text-center">{{ $no++ }}</th>
                <td>{{ $golongan->gol_kode }}</td>
                <td>{{ $golongan->gol_nama }}</td>
                <td class="text-center">
                    <div class="btn-group" role="group">
                        <a href="{{ url('golongan/edit/' . $golongan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ url('golongan/' . $golongan->id) }}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
    </div>
    @endsection