@extends('layouts.template')

@section('content')
    <div class="conatiner mt-3">
        <div class="d-flex justify-content-end">
            <a href="{{ route('order.export-excel') }}" class="btn btn-primary">Export Data (excel)</a>
        </div>

        <form action="{{ route('order.index') }}" method="get" class="mt-3">
            <div class="form-group d-flex" style="margin-bottom: 1rem">
                <input type="date" id="filter_date" name="filter_date" class="form-control" style="width: 50%" value="{{ request('filter_date') }}">
                <button type="submit" class="btn btn-primary" style="margin-left: 1rem">Cari Data</button>
            </div>
        </form>

        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Pembeli</th>
                    <th>Obat</th>
                    <th>Total Bayar</th>
                    <th>Kasir</th>
                    <th>Tanggal Beli</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    {{-- menampilkan angka urutan berdasarkan page pagination (digunakan ketika mengambil data dengan paginate simplePaginate) --}}
                    <td>{{ ($orders->currentpage()-1) * $orders->perpage() + $loop->index + 1 }}</td>
                    <td>{{ $order->name_customer }}</td>
                    <td>
                        {{-- nested loop : didalam looping ada looping --}}
                        {{-- karena column medicines tipa datanya berbentuk array json, maka untuk mengaksesnya perlu di looping js --}}
                        <ol>
                            @foreach ($order['medicines'] as $medicine)
                            <li>
                                {{-- hasil yang diinginkan --}}
                                {{-- 1 nama obat (rp.3000) : rp. 15000 qty 5 --}}
                                {{ $medicine['name_medicine'] }}
                                (Rp. {{ number_format($medicine['price'],0,',','.') }}) :
                                Rp. {{ number_format($medicine['sub_price'],0,',','.') }}
                                <small>qty {{ $medicine['qty'] }}</small>
                            </li>
                            @endforeach
                        </ol>
                    </td>
                    <td>{{ $order['user']['name'] }}</td>
                    {{-- carbon : package bawaan laravel untuk mengatur hal hal yang berkaitan dengan tipe data data/datetime --}}
                    @php
                    //setting lokal time sebagai wilayah indonesia
                    setlocale(LC_ALL, 'IND');
                    @endphp
                    <td>{{ Carbon\Carbon::parse($order->created_at)->formatLocalized('%d %B %Y') }}</td>
                    <td><a href="{{ route('kasir.order.download', $order['id']) }}" class="btn btn-secondary">Unduh (.pdf)</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection