@extends('layout.layout')

@section('content')
<form action="{{ route('data.pesan.bunga')}}" method="GET" class="card-p-5">
    {{--
        1. Form menggunakan method POST karena tujuannya adalah menambah data.
        2. @csrf diperlukan untuk validasi token CSRF pada form POST.
        3. Pastikan input name disesuaikan dengan kolom di database.
    --}}
    @csrf
    @if (Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Nama Customer :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat Customer :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email Customer :</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Buat Pesanan</button>
</form>
@endsection
