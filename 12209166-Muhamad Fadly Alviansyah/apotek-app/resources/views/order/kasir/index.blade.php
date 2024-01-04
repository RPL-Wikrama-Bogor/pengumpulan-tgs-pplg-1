@extends('layouts.template')

@section('content')
    <div class="container mt-3">
      <div class="d-flex justify-content-between mb-3">
        <div class="row col-7 g-3 justify-content-between">
          <div class="col-9">
            <form action="{{ route('kasir.order.search') }}" method="GET">
            @csrf
            <input type="date" name="search" class="form-control" value="{{ session('date') }}">
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-info">Cari Data</button>
          </form>
            <a href="{{ route('kasir.order.index') }}" class="btn btn-secondary">Clear</a>
          {{-- <button class="btn btn-secondary">Clear</button> --}}
          </div>
        </div>
        <a href="{{ route('kasir.order.create') }}" class="btn btn-primary">Pembelian Baru</a>
      </div>

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
              <td class="text-center">{{ $no++ }}</td>
              <td>{{ $item['name_customer'] }}</td>
              <td>
                @foreach ($item['medicines'] as $medicine)
                  <ol>
                    <li>
                      {{ $medicine['name_medicine'] }} ( {{ number_format($medicine['price'], 0, ',', '.') }} ) : Rp. {{ number_format($medicine['sub_price'], 0, ',', '.') }} <small>qty {{ $medicine['qty'] }}</small>
                    </li>
                  </ol>
                @endforeach
              </td>
              <td>Rp. {{ number_format($item['total_price'], 0, ',', '.') }}</td>
              <td>{{ $item['user']['name'] }}</td>
              {{-- <td>{{ $item['created_at']->format('j F Y') }}</td> --}}
              @php
                setlocale(LC_ALL, 'IND');
              @endphp
              <td>{{ Carbon\Carbon::parse($item->created_at)->formatLocalized('%d %B %Y') }}</td>
              <td>
                <a href="{{ route('kasir.order.download', $item['id']) }}" class="btn btn-secondary">Download Struk</a>
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