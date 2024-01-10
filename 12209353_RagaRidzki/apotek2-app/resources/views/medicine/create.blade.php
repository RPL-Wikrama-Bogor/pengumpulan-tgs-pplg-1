@extends('layouts.template')

@section('content')
<form action="{{ route('medicine.store') }}" method="POST" class="card p-5">
    @csrf

    @if(Session::get('success'))
    <div class="alert alert-success mt-3">{{ Session::get('success')}}</div>
    @endif
    @if($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        @endif
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Nama Obat :</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="name" id="name">
    </div>
</div>

<div class="mb-3 row">
    <label for="type" class="col-sm-2 col-form-label">Jenis Obat :</label>
    <div class="col-sm-10">
        <select class="form-select" name="type" id="type">
            <option selected disabled hidden>--Pilih--</option>
            <option value="tablet">tablet</option>
            <option value="sirup">sirup</option>
            <option value="kapsul">kapsul</option>
        </select>
    </div>
</div>
<div class="mb-3 row">
    <label for="price" class="col-sm-2 col-form-label">Harga Obat :</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" name="price" id="price">
    </div>
    </div>

<div class="mb-3 row">
    <label for="stock" class="col-sm-2 col-form-label">Stok Tersedia :</label>
    <div class="col-sm-10">
        <input Aype="number" class="form-control" name="stock" id="stock">
    </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
</form>
@endsection