@extends('layouts.template')

@section('content')
    <div class="mt-5 max-w-full mx-10">
        <div class="container mb-5">
            <h2 class="text-3xl font-semibold mb-2">Data Keterlambatan</h2>
            @if (Auth::user()->role == 'admin')
                <p>Admin / Data Keterlambatan</p>
            @else
                <p>Pembimbing / Data Keterlambatan</p>
            @endif
        </div>
        @if (Session::get('success'))
            <div class=" bg-green-300 bg-opacity-50 px-2 py-4 rounded-md flex justify-center items-center mb-5">
                {{ Session::get('success') }}</div>
        @endif
        @if (Session::get('printed'))
            <div class=" bg-green-300 bg-opacity-50 px-2 py-4 rounded-md flex justify-center items-center mb-5">
                {{ Session::get('printed') }}</div>
        @endif
        <div class="handle">
            @if (Auth::user()->role == 'admin')
                <a href="{{ route('late.create') }}"
                    class="py-2 px-4 bg-yellow-500 hover:bg-yellow-600 transition duration-300 rounded-md text-white font-medium mb-5">Tambah</a>
            @endif
            <a href="{{ route('late.export') }}"
                class="py-2 px-4 bg-blue-500 hover:bg-blue-600 transition duration-300 rounded-md text-white font-medium mb-5">Export
                Data Keterlambatan</a>
        </div>
        <div class="relative top-6 overflow-x-auto shadow-md sm:rounded-lg">
            <div class="mt-5 flex">
                @if (Auth::user()->role == 'admin')
                    <a href="{{ route('late.home') }}" id="all"
                        class="text-blue-500 border-t border-l border-r p-2 rounded-t">Keseluruhan Data</a>
                    <a href="{{ route('late.rekap') }}" id="rekap" class="hover:text-blue-500 p-2">Rekapitulasi Data</a>
                @endif

                @if (Auth::user()->role == 'ps')
                    <a href="{{ route('pemb.late.home') }}" id="all"
                        class="text-blue-500 border-t border-l border-r p-2 rounded-t">Keseluruhan Data</a>
                    <a href="{{ route('pemb.late.rekap') }}" id="rekap" class="hover:text-blue-500 p-2">Rekapitulasi
                        Data</a>
                @endif
            </div>
            @if (Auth::user()->role == 'admin')
                <table class="w-full text-sm text-center rtl:text-right  text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nis
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jumlah Keterlambatan
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($rekap as $item)
                            <tr>
                                <td>
                                    {{ $no++ }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->student['nis'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->student['name'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->total }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('late.show', ['id' => $item->student_id]) }}"
                                        class="text-blue-500 hover:text-blue-700">Lihat</a>

                                </td>
                                <td>
                                    @if ($item->total >= 3)
                                        <a href="{{ route('late.print', $item->student_id) }}"
                                            class=" text-white bg-red-500 hover:bg-red-700 duration-300 px-2 py-3 rounded-md">Cetak
                                            Surat Pernyataan</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
            @if (Auth::user()->role == 'ps')
                <table class="w-full text-sm text-center rtl:text-right  text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nis
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jumlah Keterlambatan
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($rekaps as $item)
                            <tr>
                                <td>
                                    {{ $no++ }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->student->nis }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->student->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->total }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('pemb.late.show', ['id' => $item->student_id]) }}"
                                        class="text-blue-500 hover:text-blue-700">Lihat</a>

                                </td>
                                <td>
                                    @if ($item->total >= 3)
                                        @if (Auth::user()->role == 'admin')
                                            <a href="{{ route('late.print', $item->student_id) }}"
                                                class=" text-white bg-red-500 hover:bg-red-700 duration-300 px-2 py-3 rounded-md">Cetak
                                                Surat Pernyataan</a>
                                        @else
                                            <a href="{{ route('pemb.late.print', $item->student_id) }}"
                                                class=" text-white bg-red-500 hover:bg-red-700 duration-300 px-2 py-3 rounded-md">Cetak
                                                Surat Pernyataan</a>
                                        @endif
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

        </div>
    </div>
@endsection
