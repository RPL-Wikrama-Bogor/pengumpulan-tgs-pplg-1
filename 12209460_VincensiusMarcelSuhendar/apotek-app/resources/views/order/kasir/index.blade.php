@extends ('layouts.template')

@section('content')
    <div class="contianer mt-3">
        <div class="d-flex justify-content-end">
            <a href="{{route('kasir.order.create')}}" class="btn btn-primary">Pembelian Baru</a>
        </div>
    </div>
@endsection
