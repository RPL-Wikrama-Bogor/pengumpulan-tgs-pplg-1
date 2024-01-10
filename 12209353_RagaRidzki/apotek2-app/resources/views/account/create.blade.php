@extends('layouts.template')

@section('content')
<form action="{{ route('account.store') }}" method="POST" class="card p-5">
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
        <label for="nama" class="col-sm-2 col-form-label">Nama :</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="nama" id="nama">
    </div>
</div>

    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email :</label>
    <div class="col-sm-10">
        <input type="email" class="form-control" name="email" id="email">
    </div>
</div>

<div class="mb-3 row">
    <label for="type" class="col-sm-2 col-form-label">Role :</label>
    <div class="col-sm-10">
        <select class="form-select" name="type" id="type">
            <option selected disabled hidden>Pilih</option>
            <option value="admin">admin</option>
            <option value="kasir">kasir</option>
        </select>
    </div>
</div>
    <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
</form>
@endsection