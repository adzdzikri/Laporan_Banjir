@extends('layouts.app')

@section('title', 'Login Petugas')

@section('content')
<div class="card">
    <h2>Login Petugas</h2>

    @if (session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>

    <p>Belum punya akun? <a href="{{ route('register') }}">Register</a></p>
</div>
@endsection
