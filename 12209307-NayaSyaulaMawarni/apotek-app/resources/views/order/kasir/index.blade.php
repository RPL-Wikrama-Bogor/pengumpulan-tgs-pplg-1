@extends('layouts.template')

@section('content')
<div class="mt-5">
    <div class="justify-content-start d-flex">
        <form action="{{ route('kasir.order.search')}}" method="GET" >
        <input type="date" name="search" id="search" value="{{ old('search')}}">
       <button type="submit" class="btn btn-primary">Cari Data</button>
       <a href="{{ route('kasir.order.index')}}" class="btn btn-primary">Reset</a>
        </form>
    </div>
    <div class="container mt-3">
        <div class="d-flex justify-content-end">
            <a href="{{ route('kasir.order.create') }}" class="btn btn-primary">Pembelian Baru</a>
        </div>
    </div>
        <table class="table table-stripped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Pembeli</th>
                    <th>Obat</th>
                    <th>Total Bayar</th>
                    <th>Kasir</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($orders as $item)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td>{{ $item['name_customer'] }}</td>
                        <td>
                            {{-- karna column medicines pada table orders bertipe json yang diubat formatnya menjadi array maka dari itu untuk mengakses/menampilkan item nya perlu menggunakan looping --}}
                            @foreach ($item['medicines'] as $medicine)
                                <ol>
                                    <li>
                                        {{-- mengakses key array assoc dari tiap item array value column medicines --}}
                                        {{ $medicine['name_medicine'] }} ( {{ number_format($medicine['price'],0,',','.') }} ) : Rp. {{ number_format($medicine['sub_price'], 0,',','.') }} <small>qty {{ $medicine['qyt'] }}</small>
                                    </li>
                                </ol>
                            @endforeach
                        </td>
                        <td>Rp. {{ number_format($item['total_price'],0,',','.') }}</td>
                        {{-- karna nama kasir terdapat pada table users, dan relasi antara order dan users telah di definisikan pada function relasi bernama user maka untuk mengakses column pada table users melalui relasi antara keduanya dapat dilakukan dengan $var ['namaFucRelasi'] ['columnDariTableLainnya'] --}}
                        <td>{{ $item['user'] ['name'] }}</td>
                        <td>
                            <a href="" class="btn btn-secondary">Download Struk</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-end">
            {{-- jika data atau > 0 --}}
            @if ($orders->count())
                {{-- munculkan tampilan pagination --}}
                {{ $orders->links() }}
            @endif
        </div>
    </div>
@endsection