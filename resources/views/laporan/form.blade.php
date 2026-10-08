@extends('layouts.app')

@section('title', 'Form Laporan Banjir')

@section('content')

<h2>Form Pelaporan Banjir</h2>

<form action="{{ route('laporan.konfirmasi') }}" method="POST">

    @csrf

    <label>Nama Pelapor</label>
    <input type="text" name="nama" value="{{ old('nama') }}" required>
    @error('nama') <div class="error">{{ $message }}</div> @enderror

    <label>Lokasi Kejadian</label>
    <input type="text" name="lokasi" value="{{ old('lokasi') }}" required>
    @error('lokasi') <div class="error">{{ $message }}</div> @enderror

    <label>Tinggi Genangan Air (cm)</label>
    <input type="number" name="tinggi" value="{{ old('tinggi') }}" required>
    @error('tinggi') <div class="error">{{ $message }}</div> @enderror

    <button type="submit">Kirim Laporan</button>

</form>

@endsection