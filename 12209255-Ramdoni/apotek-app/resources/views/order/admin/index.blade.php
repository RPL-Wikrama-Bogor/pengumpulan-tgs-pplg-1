@extends('layouts.template')

@section('content')
  <div class="d-flex justify-content-between my-5">
    <div class="row col-7 g-3 justify-content-between">
      <div class="col-9">
        <form action="{{ route('order.search') }}" method="GET">
        @csrf
        <input type="date" name="search" class="form-control" value="{{ session('date') }}">
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-info">Cari Data</button>
      </form>
        <a href="{{ route('order.data') }}" class="btn btn-secondary">Clear</a>
      {{-- <button class="btn btn-secondary">Clear</button> --}}
      </div>
    </div>
    <a href="{{ route('order.export-excel') }}" class="btn btn-primary">Export data (excel)</a>
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
          <td>{{ ($orders->currentpage()-1) * $orders->perpage() + $loop->index + 1 }}</td>
          <td>{{ $order->name_customer }}</td>
          <td>
            <ol>
              @foreach ($order['medicines'] as $medicine)
                <li>
                  {{ $medicine['name_medicine'] }}
                  ( Rp. {{ number_format($medicine['price'], 0, ',', '.') }} ) :
                  Rp. {{ number_format($medicine['sub_price'], 0, ',', '.') }}
                  <small>qty {{ $medicine['qty'] }}</small>
                </li>
              @endforeach
            </ol>
          </td>
          <td>{{ $order['user']['name'] }}</td>
          @php
            setlocale(LC_ALL, 'IND');
          @endphp
          <td>{{ Carbon\Carbon::parse($order->created_at)->formatLocalized('%d %B %Y') }}</td>
          <td>
            <a href="{{ route('order.download', $order['id']) }}" class="btn btn-secondary">Unduh (.pdf)</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection