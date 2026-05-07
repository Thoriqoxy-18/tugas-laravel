@extends('layouts.app')

@section('content')
<h2>Tambah Shift</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/shifts" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nama Shift</label>
        <input type="text" name="nama_shift" class="form-control">
    </div>

    <div class="mb-3">
        <label>Jam Mulai</label>
        <input type="time" name="jam_mulai" class="form-control">
    </div>

    <div class="mb-3">
        <label>Jam Selesai</label>
        <input type="time" name="jam_selesai" class="form-control">
    </div>

    <button class="btn btn-success">Simpan</button>
</form>
@endsection

