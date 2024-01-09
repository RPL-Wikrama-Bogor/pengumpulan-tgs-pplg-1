@extends('layouts.template')

@section('content')
    <div class="container mt-3">
        <div class="d-flex justify-content-between my-3">
            <div class="row w-100 ml-2">
                <form action="{{ route('kasir.order.index') }}" method="GET">
                    <div class="col-6">
                        <input type="date" name="filter" id="filter" class="form-control">
                    </div>
                    <div class="col-4 d-inline">
                        <button class="btn btn-info" id="cari_data">Cari Data</button>
                        <button class="btn btn-secondary" id="clear_data">Clear Data</button>
                    </div>
                </form>
            </div>
            
            <a href="{{ route('kasir.order.create') }}" class="btn btn-primary d-inline w-max">Pembelian Baru</a>
        </div>

        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Pembeli</th>
                    <th>Obat</th>
                    <th>Total Bayar</th>
                    <th>Kasir</th>
                    <th>Tanggal beli</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name_customer }}</td>
                        <td>
                            @foreach ($item->medicines as $medicine)
                                <ol>
                                    <li>
                                        {{ $medicine['name_medicine'] }} ({{ number_format($medicine
                                        ['price'], 0, ',','.') }}) : Rp.  {{ number_format($medicine
                                        ['sub_price'], 0, ',','.') }} <small>qty {{ $medicine['qty'] }}</small>
                                    </li>
                                </ol>
                            @endforeach
                        </td>
                        <td>{{ number_format($item->total_price, 0, ',','.') }}</td>
                        <td>
                            {{ $item->user->name }}
                        </td>
                        <td>
                            @php \Carbon\Carbon::setLocale('id_ID') @endphp
                            {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d, F Y') }}
                            {{-- {{ \Carbon\carbon::parse($item->created_at)->difforHumans() }} hasilnya bukan tanggal tp hsilnya 
                            berapa jam yg lalu (misal 21 jam yang lalu) --}} 
                            {{-- {{ \Carbon\carbon::parse($item->created_at)->locale('id_ID')->translatedFormat('d F Y') }} --}}
                        </td>                        
                        <td>
                            <a href="{{ route('kasir.order.download', $item['id']) }}" class="btn btn-secondary">Download struk</a>
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