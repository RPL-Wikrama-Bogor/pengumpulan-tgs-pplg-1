@extends('layouts.template')

@section('content')
    <div class="conatiner mt-3">
        <div class="d-flex justify-content-end">
            <a href="{{ route('kasir.order.create') }}" class="btn btn-primary">Pembelian Baru</a>
        </div>

        <form action="{{ route('kasir.order.index') }}" method="get" class="mt-3">
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
                @php $no = 1 @endphp
                @foreach ($orders as $item)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td>{{ $item['name_customer'] }}</td>
                        <td>
                            @foreach ($item['medicines'] as $medicine)
                            <ol>
                                <li>
                                    {{-- mengakses key array assoc dari tiap item array value column medicines --}}
                                    {{ $medicine['name_medicine'] }} ( {{ number_format($medicine['price'],0,',',',') }}) : Rp. {{ number_format($medicine['sub_price'],0,',','.') }} <small>qty {{ $medicine['qty'] }} </small>
                                </li>
                            </ol>
                            @endforeach
                        </td>
                        <td>Rp. {{ number_format($item['total_price'],0,',','.') }}</td>
                        {{-- blbablabla --}}
                        <td>{{ $item['user']['name'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($item['created_at'])->translatedFormat('j F Y') }}</td> <!-- Display purchase date in the desired format -->
                        <td>
                            <a href="{{ route('kasir.order.download', $item['id']) }}" class="btn btn-secondary">Download Setruk</a>
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