@extends('layouts.template')

@section('content')
  <div class="jumbtotron py-4 px-5">
    @if (Session::get('alreadyLogin'))
      <div class="alert alert-danger">{{ Session::get('alreadyLogin') }}</div>
    @endif
    <h1 class="display-4">Selamat Datang {{ Auth::user()->name }}!</h1>
    <hr class="my-4">
    <p>Aplikasi ini digunakan hanya oleh pegawai administrator APOTEK. Digunakan untuk mengelola data obat, penyetokan, juga pembelian (kasir).</p>
  </div>
@endsection