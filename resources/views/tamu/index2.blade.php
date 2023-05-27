@extends('layout')

@section('content')
<div class="container mt-5">


    @if (session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
    @endif
    <div class="row border pb-3 pl-0">
        <div class="col-lg-7 pl-0">
            <div class="m-0 p-0">
                <img src="{{ asset('images/1.png') }}" alt="Gambar Tamu" class="img-fluid w-100" style="margin: 0;">
            </div>
        </div>
        <div class="col-lg-5 pt-3">
            <h5>Form Buku Tamu</h5>
            <form action="{{ route('store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" pattern="^[a-zA-Z\s]+$" title="isi nama dengan huruf tanpa angka atau karakter lainnya " placeholder="Septyan" required style="background-color: #f9f9f9;">
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">Nomor HP</label>
                    <div class="input-group">
                        <span class="input-group-text">+62</span>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ old('no_hp') }}"
                            pattern="8\d{9,14}"
                            title="isi nomor hp dimulai dengan angka 8 tanpa menyertakan (+62) atau (0) didepannya"
                            placeholder="85895595605" required style="background-color: #f9f9f9;">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="asal_daerah" class="form-label">Asal Daerah</label>
                    <select class="form-control" id="asal_daerah" name="asal_daerah" required style="background-color: #f9f9f9;">
                        <option value="">Pilih Asal Daerah</option>
                        <option value="surabaya">Surabaya</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="mb-3" id="asal_daerah_custom" style="display: none;">
                    <label for="asal_daerah_custom" class="form-label">Asal Daerah Lainnya</label>
                    <input type="text" class="form-control" id="asal_daerah_custom" name="asal_daerah_custom" value="{{ old('asal_daerah_custom') }}" pattern="^[a-zA-Z\s]+$" title="isi asal daerah dengan huruf tanpa angka atau karakter lainnya " style="background-color: #f9f9f9;">
                </div>
               
                    <button type="submit" class="btn btn-primary">Simpan</button>
                
            </form>
        </div>
    </div>


    <script>
        document.getElementById('asal_daerah').addEventListener('change', function() {
            var asalDaerahCustom = document.getElementById('asal_daerah_custom');

            if (this.value === 'other') {
                asalDaerahCustom.style.display = 'block';
                asalDaerahCustom.setAttribute('required', 'required');
            } else {
                asalDaerahCustom.style.display = 'none';
                asalDaerahCustom.removeAttribute('required');
            }
        });

        window.addEventListener('DOMContentLoaded', function() {
            var asalDaerah = document.getElementById('asal_daerah');
            var asalDaerahCustom = document.getElementById('asal_daerah_custom');

            if (asalDaerah.value === 'surabaya') {
                asalDaerahCustom.style.display = 'none';
                asalDaerahCustom.removeAttribute('required');
            } else {
                asalDaerahCustom.style.display = 'block';
                asalDaerahCustom.setAttribute('required', 'required');
            }
        });
    </script>


    @endsection