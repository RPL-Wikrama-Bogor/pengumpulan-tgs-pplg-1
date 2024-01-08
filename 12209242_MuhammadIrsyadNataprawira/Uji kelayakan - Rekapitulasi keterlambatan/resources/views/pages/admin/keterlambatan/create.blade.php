@extends('layouts.template')

@section('content')
    <div class="mt-5 max-w-full mx-10">
        <div class="container mb-5">
            <h2 class="text-3xl font-semibold mb-2">Tambah Data Keterlambatan</h2>
            <p>Home / Data Keterlambatan / Tambah Data Keterlambatan </p>
        </div>
        <div class="container px-2 py-8 bg-slate-100 rounded-md shadow-md">
            <form action="{{ route('late.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @if ($errors->all())
                    <ul class="bg-red-500 rounded-md max-w-sm py-2 mx-2  bg-opacity-60">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="mb-5">
                    <label for="student_id" class="block mb-2 font-semibold">Siswa</label>
                    <select name="student_id" id="student_id" class="w-full rounded-md">
                        <option selected disabled hidden>Pilih</option>
                        @foreach ($student as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <label for="date_time_late" class="block mb-2 font-semibold">Tanggal Keterlambatan</label>
                    <input type="datetime-local" name="date_time_late" id="date_time_late" class="w-full rounded-md">
                </div>
                
                <div class="mb-5">
                    <label for="information" class="block mb-2 font-semibold">Information</label>
                    <textarea id="message" rows="4" name="information"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukan Informasi..."></textarea>
                </div>


                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload
                        file</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" name="bukti" type="file" accept="image/*">
                </div>

                <button type="submit"
                    class="py-2 px-10 bg-blue-500 hover:bg-blue-600 transition duration-300 rounded-md text-white font-medium">Tambah</button>
            </form>
        </div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dateInput = document.getElementById('date_time_late');
        const currentDate = new Date().toISOString().slice(0, 16);
        dateInput.value = currentDate;
    });
</script>