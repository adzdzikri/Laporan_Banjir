<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LaporBanjir')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f6f8;
        }

        header {
            background-color: #1565c0;
            color: white;
            padding: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        main {
            width: 80%;
            margin: 30px auto;
        }

        .card {
            background: white;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #1565c0;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        footer {
            text-align: center;
            padding: 20px;
            margin-top: 30px;
            background-color: #ddd;
        }

        .alert {
            padding: 15px;
            background-color: #d4edda;
            color: #155724;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        label { font-weight: bold; }

        .badge {
            padding: 3px 10px;
            border-radius: 12px;
            color: white;
            font-size: 14px;
        }
        .badge-waspada { background-color: #f9a825; }
        .badge-siaga   { background-color: #ef6c00; }
        .badge-awas    { background-color: #c62828; }

        .error { color: #c62828; margin: -10px 0 12px; font-size: 14px; }
    </style>
</head>

<body>

<header>
    <h1>LaporBanjir</h1>

    <nav>
        <a href="{{ route('laporan.form') }}">Form Laporan</a>
        @auth
            <a href="{{ route('laporan.daftar') }}">Daftar Laporan</a>
            <a href="{{ route('profil') }}">Profil Petugas</a>
            <form method="POST" action="{{ route('logout') }}" style="display:inline">
                @csrf
                <button type="submit" style="background:#0d47a1">Logout</button>
            </form>
        @endauth
        @guest
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endguest
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    &copy; 2026 LaporBanjir - BPBD Kabupaten Bandung
</footer>

</body>
</html>