@extends('layouts.template')

@section('content')
<div class="container mt-3">
    <div class="d-flex justify-content-between mb-3">
        <div class="d-flex w-50">
            <form action="{{ route('order.search')}}" method="get" class="d-flex w-50">
            <input type="date" name="date" id="date" class="form-control" style="margin-right: 10px;">
            <button class="btn btn-info text-white" style="margin-right: 10px">Cari</button>
            </form>
            <a href="{{ route('kasir.order.index')}}" class="btn btn-secondary"> Clear </a>
        </div>
        <a href="{{ route('kasir.order.create') }}" class="btn btn-primary justify"> Pembelian Baru</a>
    </div>   
</div>


<table class="table table-stripped table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Pembeli</th>
            <th>Obat</th>
            <th>Kasir</th>
            <th>Tanggal Pembelian</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($orders as $order)
        <tr>
            {{-- menampilkan angka ururtan berdasarkan page pagination (digunakan ketika mengambil data dengan <paginate /
                simplePaginate--}}
            <td>{{ ($orders->currentpage()-1) * $orders->perpage() + $loop->index + 1}}</td>
            <td>{{$order->name_customer}}</td>
            <td>
                {{-- nested loop: didalam looping ada looping --}}
                {{-- karna column medicines tipe datanya berebentuk array json, maka untuk aksesnya perlu di looping jg--}}
                <ol>
                    @foreach ($order['medicines'] as $medicine )
                    <li>
                        {{ $medicine['name_medicine']}}
                        ( Rp. {{number_format($medicine['price'], 0, ',', '.') }} ) :
                        Rp. {{number_format($medicine['sub_price'], 0, ',', '.') }} 
                        <small>qty {{ $medicine['qty'] }} </small>                        
                    </li>
                    @endforeach
                </ol>        
            </td>
            <td>{{ $order['user']['name']}}</td>
            {{-- carbon: package bawaan laravel untuk mengatur hal-hal yang berkaitan dengan tipe data data / datetime --}}
            @php
                //setting lokal time sebagai wilayah indonesia
                setlocale(LC_ALL, 'IND');
            @endphp
            <td>{{ Carbon\Carbon::parse($order->created_at)->formatLocalized('%d %B %Y')}}</td>
            <td> <a href="{{ route('kasir.order.download', $order['id']) }}" class="btn btn-secondary">unduh (.PDF)</a></td>            
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