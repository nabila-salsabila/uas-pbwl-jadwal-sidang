    @extends('layouts.app')
    
    @section('content')
    <div class="container">
    <div class="card">
        <div class="card-body">
        <h5>Data User</h5>
        <a href="{{ url('users/create') }}" class="btn btn-primary mb-3 float-end">Tambah Baru</a>

        <table class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($rows as $user)
            <tr>
                <th class="text-center">{{ $no++ }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td class="text-center">
                    <div class="btn-group" role="group">
                        <a href="{{ url('users/edit/' . $user->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ url('users/' . $user->id) }}" method="post">
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