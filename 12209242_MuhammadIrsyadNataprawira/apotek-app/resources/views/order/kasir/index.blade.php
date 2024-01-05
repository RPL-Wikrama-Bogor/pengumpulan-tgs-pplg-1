@extends('layouts.template')

@section('content')
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('kasir.order.index') }}" method="GET">
                        <div class="input-group">
                            <input type="date" name="search" id="search" class="form-control" placeholder="Search by Date" value="{{ request('search') }}">
                                <button type="submit" class="btn btn-info">Cari Data</button>
                            @if(request('search'))
                                <a href="{{ route('kasir.order.index') }}" class="btn btn-secondary">Clear</a>
                            @endif
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="{{ route('kasir.order.create') }}" class="btn btn-primary ml-2">Pembelian Baru</a>
                </div>
            </div>
        </div>
        <br>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th class="text-center">No</th>
                <th>Pembeli</th>
                <th>Obat</th>
                <th>Total Bayar</th>
                <th>Kasir</th>
                <th>Tanggal Beli</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($orders as $item)
                <tr>
                    <td class="textcenter">{{ $no++ }}</td>
                    <td>{{ $item['name_customer'] }}</td>
                    <td>
                        @foreach ($item['medicines'] as $medicine)
                            <ol>
                                <li>
                                    {{ $medicine['nama_medicine'] }} ( {{ number_format($medicine['price'],0,',','.') }} ) : Rp. {{number_format($medicine['sub_price'],0,',','.') }} <small>qty {{ $medicine['qty'] }}</small>
                                </li>
                            </ol>
                         @endforeach
                        </td>
                        <td>{{ number_format($item['total_price'],0,',','.') }}</td>
                        <td>{{ $item['user']['name']}}</td>
                        @php
                            setlocale(LC_ALL, 'IND');
                        @endphp
                        <td>{{ Carbon\Carbon::parse($item->created_at)->formatLocalized('%d %B %Y')}}</td>
                    <td>
                        <a href="{{ route('kasir.order.download', $item['id'])}}" class="btn btn-secondary">Unduh (.pdf)</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-end">
        @if ($orders->count())
            {{ $orders->links() }}
        @endif
    </div>
</div>
@endsection