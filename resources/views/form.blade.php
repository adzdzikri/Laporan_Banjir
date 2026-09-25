<!DOCTYPE html>
<html lang="id">
    

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LaporBanjir - Laporan Banjir</title>

    <link rel="stylesheet" href="{{ asset('css/laporbanjir.css') }}">

</head>
<body>

    <div class="container">

        <div class="card">

            <div class="header">
                <div class="icon">🌊</div>

                <h1>LaporBanjir</h1>

                <p>
                    Laporkan kejadian banjir di wilayah Anda
                </p>
            </div>

            <form action="/laporbanjir/kirim" method="POST">

                @csrf

                <div class="form-group">

                    <label for="nama">
                        Nama Pelapor
                    </label>

                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        placeholder="Masukkan nama Anda"
                        required
                    >

                </div>

                <div class="form-group">

                    <label for="lokasi">
                        Lokasi Kejadian
                    </label>

                    <input
                        type="text"
                        id="lokasi"
                        name="lokasi"
                        placeholder="Contoh: Kecamatan Baleendah, Desa Bojongsoang"
                        required
                    >

                </div>

                <div class="form-group">

                    <label for="tinggi">
                        Tinggi Genangan Air
                    </label>

                    <div class="input-satuan">

                        <input
                            type="number"
                            id="tinggi"
                            name="tinggi"
                            placeholder="Masukkan tinggi genangan"
                            min="0"
                            required
                        >

                        <span>cm</span>

                    </div>

                </div>

                <button type="submit">
                    Kirim Laporan
                </button>

            </form>

        </div>

    </div>

</body>

</html>