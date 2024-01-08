@extends('layouts.template')
@section('content')
<div class="container mt-3">
 <form action="{{ route('kasir.order.store') }}" class="card m-auto p-5" method="POST">
    @csrf
    {{-- validasi error message --}}
    @if ($errors->any())
    <ul class="alert alert-danger p-3">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    @if (Session::get('failed'))
        <div class="alert alert-danger">{{ Session::get('failed') }}</div>
    @endif
    <p>Penanggung Jawab : <b>{{ Auth::user()->name }}</b></p>
    <div class="mb-3 row">
        <label for="name_customer" class="col-sm-2 col-form-label">Nama Pembeli</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="name_customer" id="name_customer">
    </div>
</div>
    <div class="mb-3 row">
        <label for="medicines" class="col-sm-2 col-form-label">Obat</label>
    <div class="col-sm-10">
        {{-- name dibuat array karena nantinya data obat akan berbentuk array/data bisa lebih dari satu --}}
        <select name="medicines[]" id="medicines" class="form-select">
            <option selected hidden disabled>Pesanan 1</option>
            @foreach ($medicines as $item)
                <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
            @endforeach
        </select>
        {{-- div pembungkus untuk tambahan select yg akan muncul --}}
        <div id="wrap-medicines"></div>
        <br>
        <p style="cursor: pointer" class="text-primary" id="add-select">+ tambah obat</p>
    </div>
</div>
    <button type="submit" class="btn btn-block btn-lg btn-primary">Konfirmasi Pembelian</button>
</form>
</div>
@endsection

@push('script')
<script>
    //definisikan no sebagai 2
    let no = 2;
    //ketika tag dengan id add-select di click jalankan func berikut
    $("#add-select").on("click", function(){
        // tag html yg akan dengan id add-select di click jalankan func berikut
        let el = `<br><select name="medicines[]" id="medicines" class="form-select">
        <option selected hidden disabled>Pesanan ${no}</option>
        @foreach ($medicines as $item)
            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
            @endforeach
            </select>`;
        // append : tambahkan element htm dibagian sebelum penutup tag terkait (sebelum penutup tag yg id nya wrap-medicines)
        $("#wrap-medicines").append(el);
        // increments variable no agar angka yg muncul di option selalu bertambah 1 sesuai jumlah selectnya
        no++;
    });
</script>
@endpush