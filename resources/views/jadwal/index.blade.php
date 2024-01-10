    @extends('layouts.app')
    
    @section('content')
    <div class="container">
    <div class="card">
        <div class="card-body">
            
        <!-- Konten Anda -->
        <script>
            @if(session('alert-success'))
                alert('{{ session('alert-success') }}');
            @endif
        </script>


        <strong><h3>Data Jadwal</h3></strong>
        <a href="{{ url('jadwal/create') }}" class="btn btn-primary mb-3 float-end"><i class="bi bi-plus"></i> Tambah Baru</a>

        <table id="dataTable" class="table table-hover table-striped table-bordered"><table class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col">Pengadilan</th>
                <th scope="col">Tanggal Sidang</th>
                <th scope="col">Waktu Sidang</th>
                <th scope="col">Jenis Perkara</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($rows as $jadwal)
            <tr>
                <th class="text-center">{{ $no++ }}</th>
                <td>{{ $jadwal->pengadilan->nama_pengadilan }}</td>
                <td>{{ \Carbon\Carbon::parse($jadwal->tgl_sidang)->format('d/m/Y') }}</td>
                <td>{{ $jadwal->waktu_sidang }}</td>
                <td>{{ $jadwal->jenis_perkara }}</td>
                <td class="text-center">
                    <div class="btn-group" role="group">
                        <a href="{{ url('jadwal/edit/' . $jadwal->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ url('jadwal/' . $jadwal->id) }}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Ingin Menghapus Data Ini ?');">
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