@extends('layouts.app')

@section('content')
<h2>Edit Shift</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/shifts/{{ $shift->id }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama Shift</label>
        <input type="text" name="nama_shift" value="{{ $shift->nama_shift }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Jam Mulai</label>
        <input type="time" name="jam_mulai" value="{{ $shift->jam_mulai }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Jam Selesai</label>
        <input type="time" name="jam_selesai" value="{{ $shift->jam_selesai }}" class="form-control">
    </div>

    <button class="btn btn-primary">Update</button>
</form>
@endsection

