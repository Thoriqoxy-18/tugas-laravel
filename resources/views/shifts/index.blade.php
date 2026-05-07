@extends('layouts.app')

@section('content')
<h2 class="mb-3">Manajemen Shift</h2>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<a href="/shifts/create" class="btn btn-primary mb-3">+ Tambah Shift</a>

<div class="card">
    <div class="card-body">
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Nama Shift</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($shifts as $shift)
                <tr>
                    <td>{{ $shift->nama_shift }}</td>
                    <td>{{ $shift->jam_mulai }}</td>
                    <td>{{ $shift->jam_selesai }}</td>
                    <td>
                        <a href="/shifts/{{ $shift->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

                        <form action="/shifts/{{ $shift->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection