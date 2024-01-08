@extends('layouts.template')

@section('content')

    @if(Session::get('success'))
        <div class="alert alert-success"> {{Session::get('success') }} </div>
        @endif
        @if(Session::get('deleted'))
            <div class="alert alert-warning"> {{ Session::get('deleted') }} </div>
            @endif

            <div class="d-flex flex-row-reverse">
                <div class="p-2"><a href="{{ route('user.create') }}" class="btn btn-secondary">Tambah Pengguna</a></div>
            </div>

                <br>
                
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($users as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['email'] }}</td>
                <td>{{ $item['role'] }}</td>
                <td class="d-flex justify-content-center">
                    <a href="{{ route('user.edit', $item['id']) }}" class="btn btn-primary me-3">Edit</a>
                    <form action="{{ route('user.delete', $item['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
            