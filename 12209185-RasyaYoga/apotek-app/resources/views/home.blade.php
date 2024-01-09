@extends('layouts.template')

@section('content')
    <div class="jumbotron py-4 px-5">
        <h1 class="display-4">
            Selamat Datang {{ Auth::user()->name }}!
        </h1>
        <hr class="my-4">
        <p>Aplikasi ini digunakan hanya oleh pegawai administrator Apotek.
            Sigunakan untuk mengelola data obat, penyetokan, 
            juga pembelian (kasir).
        </p>
    </div>
@endsection
