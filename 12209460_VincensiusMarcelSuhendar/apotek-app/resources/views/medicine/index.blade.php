@extends('layouts.template')

@section('content')

    @if (Session::get('success'))
        <div class="alert alert-success"> {{Session::get('success') }} </div>
    @endif

    @if (Session::get('deleted'))
        <div class="alert alert-warning"> {{Session::get('deleted') }} </div>
    @endif

    <table class="table table-striped table-bordered table-hover" >
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tipe</th>
                <th>Harga</th>
                <th>Stok</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($medicines as $item)
            <tr>
                <td> {{ $item['id'] }} </td>
                <td> {{ $item['name']}} </td>
                <td> {{ $item['type']}} </td>
                <td> {{ $item['price']}} </td>
                <td> {{ $item['stock'] }} </td>
                <td class="d-flex justify-content-center">
                    <a href="{{route('medicine.edit', $item['id'])}}" class="btn btn-primary me-3">Edit</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#warning{{ $item['id'] }}">
                        Hapus
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="warning{{ $item['id'] }}" tabindex="-1" role="dialog"
                        aria-labelledby="warning" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Warning</h5>
                                    <button type="button" class="close btn-close float-end" data-dismiss="modal" aria-label="Close"></button>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Hapus obat ini?
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('medicine.delete', $item['id']) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
