    @extends('layouts.app')
    
    @section('content')
    <div class="container">
    <div class="card">
        <div class="card-body">
        <h5>Data Pelanggan</h5>
        <a href="{{ url('pelanggan/create') }}" class="btn btn-primary mb-3 float-end">Tambah Baru</a>

        <table class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col">No pel</th>
                <th scope="col">Golongan</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">No HP</th>
                <th scope="col">No KTP</th>
                <th scope="col">Seri</th>
                <th scope="col">Meteran</th>
                <th scope="col">User</th>
                <th scope="col">Status</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($rows as $pel)
            <tr>
                <th class="text-center">{{ $no++ }}</th>
                <td>{{ $pel->pel_no }}</td>
                <td>{{ $pel->golongan->gol_nama }}</td>
                <td>{{ $pel->pel_nama }}</td>
                <td>{{ $pel->pel_alamat }}</td>
                <td>{{ $pel->pel_hp }}</td>
                <td>{{ $pel->pel_ktp }}</td>
                <td>{{ $pel->pel_seri }}</td>
                <td>{{ $pel->pel_meteran }}</td>
                <td>{{ $pel->users->name }}</td>
                <td>{{ $pel->status }}</td>
                <td class="text-center">
                    <div class="btn-group" role="group">
                        <a href="{{ url('pelanggan/edit/' . $pel->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ url('pelanggan/' . $pel->id) }}" method="post">
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