@extends('layout')

@section('content')
@php
use Carbon\Carbon;
Carbon::setLocale('id'); // Mengatur lokal bahasa menjadi Indonesia
@endphp
<div class="container mt-5">
    <h1>Data Tamu</h1>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>No. HP</th>
                <th>Kirim Pesan</th>
                <th>Kota</th>
                <th>Created at</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_tamu as $tamu)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $tamu->nama }}</td>
                <td>{{ $tamu->no_hp }} </td>
                <td><a href="https://wa.me/{{ $tamu->no_hp }}" target="_blank" class="btn btn-link"><img src="{{ asset('images/wa.png') }}" alt="Logo" width="30" height="30" /></a></td>
                <td>{{ $tamu->asal_daerah }}
                </td>
                <td>{{ Carbon::parse($tamu->created_at)->translatedFormat('l, d F Y') }}</td>
                <td>
                    <a href="{{ route('admin.edit', $tamu->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('admin.destroy', $tamu->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection