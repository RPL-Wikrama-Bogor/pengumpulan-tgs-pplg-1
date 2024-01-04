@extends('layouts.template')

@section('content')
<div class="container mt-3">
    <div class="d-flex justify-content-between mb-3">
        <div class="d-flex w-50">
            <form action="{{ route('kasir.order.search')}}" method="get" class="d-flex w-50">
            <input type="date" name="date" id="date" class="form-control" style="margin-right: 10px;">
            <button class="btn btn-info text-white" style="margin-right: 10px">Cari</button>
            </form>
            <a href="{{ route('kasir.order.index')}}" class="btn btn-secondary"> Clear </a>
        </div>

        <a href="{{ route('kasir.order.create') }}" class="btn btn-primary"> Pembelian Baru</a>
    </div>
</div>
{{-- <form action="{{ route('kasir.order.index')}}" class="row row-cols-lg-auto g-3 align-items-center" method="GET">
        <div class="col-auto">
            <input type="date" name="search" id="search" class="form-control" placeholder="Search by Date" value="{{ request('search') }}">
            <button type="submit" class="btn btn-info">Cari Data</button>
        </div>
        <div class="col-auto">
        @if(request('search'))
            <a href="{{ route('kasir.order.index')}}" class="btn btn-secondary">Clear</a>
        @endif
        </div>
</form> --}}

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th>Pembeli</th>
            <th>Obat</th>
            <th>Total bayar</th>
            <th>Kasir</th>
            <th>Tanggal Pembelian</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @php $no = 1; @endphp
        @foreach ($orders as $item)
            <tr>
                <td class="text-center">{{ $no++ }}</td>
                <td>{{ $item['name_customer'] }}</td>
                <td>{{-- karna column medicines pada table orders bertipe json yang diubah formatnya menjadi array,
                    maka dari itu untuk mengakses / menampilkan itemnya perlu menggunakan looping--}}
                @foreach ($item['medicines'] as $medicine)
                <ol>
                    <li>
                        {{-- mengakses key array assoc dari tiap item array value column medicines --}}
                        {{ $medicine['name_medicine']}} ({{ number_format($medicine['price'], 0, ',', '.')}}) : Rp. {{ number_format
                        ($medicine['sub_price'], 0, ',', '.')}} <small> qty {{$medicine['qty']}}</small>
                    </li>
                </ol>
                @endforeach
                </td>
                <td> Rp. {{ number_format($item['total_price'], 0, ',', '.')}}</td>
                {{-- karna nama kasir terdapat pada table users, dan relasi antara order dan users telah didefinisikan pada function relasi
                bernama  user. maka, ntuk mengakses column pada table users melalui relasi antara keduanya dapar dilakukan dengan $var
                ['namaFuncRelasi']['columnDariTableLainnya']--}}
                <td>{{$item['user']['name']}}</td>
                {{-- carbon: package bawaan laravel untuk mengatur hal-hal yang berkaitan dengan tipe data data / datetime --}}
                @php
                    //setting lokal time sebagai wilayah indonesia
                    setlocale(LC_ALL, 'IND');
                @endphp
                <td>{{ Carbon\Carbon::parse($item->created_at)->formatLocalized('%d %B %Y')}}</td>
                <td>
                    <a href="{{ route('kasir.order.download', $item['id']) }}" class="btn btn-secondary">Download Struck</a>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-end">
    {{-- jika data ada atau > 0 --}}
    @if ($orders->count())
    {{-- munculkan tampilan pagination --}}
    {{ $orders->Links() }}
    @endif
</div>

@endsection