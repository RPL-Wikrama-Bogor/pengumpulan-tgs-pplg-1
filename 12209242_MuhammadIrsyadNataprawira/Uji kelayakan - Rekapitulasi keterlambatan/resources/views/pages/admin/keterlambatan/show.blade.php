@extends('layouts.template')

@section('content')
    <div class="mt-5 max-w-full mx-10">
        <div class="container mb-5">
            <h2 class="text-3xl font-semibold mb-2">Detail Data Keterlambatan</h2>
            <div class="handle">
                <a href="">Home</a>
                @if (Auth::user()->role == 'admin')
                    <a href="{{ route('late.rekap') }}" class="hover:text-blue-500">/ Rekapitulasi Data</a>
                @else
                    <a href="{{ route('pemb.late.rekap') }}" class="hover:text-blue-500">/ Rekapitulasi Data</a>
                @endif
                <a href="" class="font-medium">/ Detail Data Keterlambatan</a>
            </div>
        </div>
        <div class="text-gray-400">
            <span class="text-2xl font-medium text-gray-700">{{ $students->name }}</span>
            | {{ $students->nis }} | {{ $students->rombel->rombel }} | {{ $students->rayon->rayon }}
        </div>
        <div class="grid grid-cols-3">
            @php
                $no = 1;
            @endphp
            @foreach ($lates as $item)
                <div
                    class="max-w-md p-3 shadow-md rounded mt-6  flex justify-center items-center flex-col outline outline-gray-200">
                    <h1 class="text-lg font-medium text-indigo-500">Keterlambatan ke-{{ $no++ }}</h1>
                    <p class="text-indigo-800 font-semibold">{{ $item->date_time_late }}</p>
                    <div class="px-2 py-6">
                        <img src="{{ asset('images/' . $item->bukti) }}" width="100" class="rounded-md">
                    </div>
                    <p class="text-indigo-900 font-semibold">Alasan: {{ $item->information }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
