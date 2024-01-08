@extends('layouts.template')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('order.search') }}" method="GET">
                <div class="input-group">
                    <input type="date" name="search" id="search" class="form-control" value="{{ request('search') }}">
                        <button type="submit" class="btn btn-info">Cari Data</button>
                        @if(request('search'))
                            <a href="{{ route('order.data') }}" class="btn btn-secondary">Clear</a>
                        @endif
                </div>
            </form> 
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <a href="{{ route('order.export-excel') }}" class="btn btn-primary ml-2">Export Data (Excel)</a>
        </div>
    </div>
</div>
<br>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>No</th>
            <th>Pembeli</th>
            <th>Obat</th>
            <th>Kasir</th>
            <th>Tanggal Beli</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
            <tr>
                <td>{{($orders->currentpage()-1) * $orders->perpage() + $loop->index + 1 }}</td>
                <td>{{ $order->name_customer }}</td>
                <td>
                    <ol>
                        @foreach ($order['medicines'] as $medicine)
                            <li>
                                {{ $medicine['nama_medicine']}}
                                ( Rp. {{ number_format($medicine['price'],0,',','.') }}) :
                                Rp. {{ number_format($medicine['sub_price'],0,',','.')}}
                                <small>qty {{ $medicine['qty'] }}</small>
                            </li>
                        @endforeach
                    </ol>
                </td>
                <td> {{ $order['user']['name'] }} </td>
                @php
                    setlocale(LC_ALL, 'IND');
                @endphp
                <td>{{ Carbon\Carbon::parse($order->created_at)->formatLocalized('%d %B %Y')}}</td>
                <td>
                    <a href="{{ route('order.download', $order['id'])}}" class="btn btn-secondary">Unduh (.pdf)</a>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-end">
    @if ($orders->count())
        {{ $orders->links() }}
    @endif
</div>
@endsection