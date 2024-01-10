@extends('layouts.template')

@section('content')
    <div class="jumbotron py-4 px-5">
        @if (Session::get('alreadyAccess'))
            <div class="alert alert-danger">{{ Session::get('alreadyAccess') }}</div>
        @endif
        <h1 class="display-4">
            Selamat Datang {{ Auth::user()->name }}!
        </h1>

        <hr class="my-4">
        <p>Aplikasi ini juga digunakan hanya oleh pegawai administrator APOTEK. Digunakan untuk mengelola data Obat, penyetokan, juga pembelian (kasir).
        </p>
    </div>

    @endsection