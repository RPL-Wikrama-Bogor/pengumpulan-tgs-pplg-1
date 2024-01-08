@extends('layouts.template')

@section('content')
    <form action="{{ route('student.update', $student['id']) }}" method="POST" class="card p-5" >
         @csrf
         @method('PATCH')
         @if ($errors->any())
            <ul class="alert alert-danger p-3">
                @foreach ($errors->all() as $error)
                    <li> {{$error}} </li>
                @endforeach
            </ul>
         @endif

        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label" >Nama Akun: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="{{$student['name']}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="role" class="col-sm-2 col-form-label" >Role: </label>
            <div class="col-sm-10">
                <select name="role" id="role" class="form-select" >
                    <option selected disabled hidden>Pilih</option>
                    <option value="admin" {{ $student['role'] == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="guest" {{ $student['role'] == 'guest' ? 'selected' : '' }}>Guest</option>
                    <option value="member" {{ $student['role'] == 'member' ? 'selected' : '' }}>Member</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label" >Email: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="email" value="{{$student['email']}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label" >Ubah Password:  </label>
            <div class="col-sm-10">
                <input type="string" class="form-control" id="password" name="password">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3" >Ubah Data</button>
    </form>
@endsection
