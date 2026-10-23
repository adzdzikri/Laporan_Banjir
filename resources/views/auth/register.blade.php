@extends('layouts.app')

@section('title', 'Register Petugas')

@section('content')
<div class="card">
    <h2>Register Petugas</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label for="name">Nama</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="password">Password (minimal 8 karakter)</label>
        <input type="password" id="password" name="password" required>
        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="password_confirmation">Konfirmasi Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>

        <button type="submit">Register</button>
    </form>

    <p>Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
</div>
@endsection
