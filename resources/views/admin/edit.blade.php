<!-- edit.blade.php -->

@extends('layout')

@section('content')
<div class="container mt-5">
    <h1>Edit Data Tamu</h1>

    @if (session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('admin.update', $tamu->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $tamu->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">Nomor HP</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $tamu->no_hp }}" required>
        </div>
        <div class="mb-3">
            <label for="asal_daerah" class="form-label">Asal Daerah</label>
            <input type="text" class="form-control" id="asal_daerah" name="asal_daerah" value="{{ $tamu->asal_daerah }}"
                required>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>
@endsection