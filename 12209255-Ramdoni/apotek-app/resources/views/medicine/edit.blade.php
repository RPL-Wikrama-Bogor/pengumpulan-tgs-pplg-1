@extends('layouts.template')

@section('content')
  <form action="{{ route('medicine.update', $medicine['id']) }}" method="post" class="card p-5">
    @csrf
    @method('PATCH')

    @if (Session::get('success'))
      <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if ($errors->any())
      <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif

    <div class="mb-3 row">
      <label for="name" class="col-sm-2 col-form-label">Nama Obat :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name" value="{{ $medicine['name'] }}">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="type" class="col-sm-2 col-form-label">Jenis Obat :</label>
      <div class="col-sm-10">
        <select name="type" id="type" class="form-select">
          <option selected disabled hidden>Pilih</option>
          <option value="tablet" {{ $medicine['type'] == 'tablet' ? 'selected' : '' }}>Tablet</option>
          <option value=sirup {{ $medicine['type'] == 'sirup' ? 'selected' : '' }}>Sirup</option>
          <opion value="kapsul" {{ $medicine['type'] == 'kapsul' ? 'selected' : '' }}>Kapsul</opion>
        </select>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="price" class="col-sm-2 col-form-label">Harga Obat :</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="price" name="price" value="{{ $medicine['price'] }}">
      </div>
    </div>
    <input type="hidden" name="stock" value="{{  $medicine['stock'] }}">
    <button type="submit" class="btn btn-primary mt-3">Ubah Data</button>
  </form>
@endsection