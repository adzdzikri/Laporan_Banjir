<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LaporBanjir - Konfirmasi</title>

    <link rel="stylesheet" href="{{ asset('css/laporbanjir.css') }}">

</head>

<body>

    <div class="container">

        <div class="card">

            <div class="success-icon">
                ✓
            </div>

            <div class="header">

                <h1>Laporan Berhasil</h1>

                <p>
                    Data laporan banjir berhasil dikirim.
                </p>

            </div>

            <div class="data-laporan">

                <div class="data-item">

                    <span class="label">
                        Nama Pelapor
                    </span>

                    <span class="value">
                        {{ $nama }}
                    </span>

                </div>

                <div class="data-item">

                    <span class="label">
                        Lokasi Kejadian
                    </span>

                    <span class="value">
                        {{ $lokasi }}
                    </span>

                </div>

                <div class="data-item">

                    <span class="label">
                        Tinggi Genangan
                    </span>

                    <span class="value">
                        {{ $tinggi }} cm
                    </span>

                </div>

            </div>

            <a href="/laporbanjir" class="button-kembali">
                ← Buat Laporan Baru
            </a>

        </div>

    </div>

</body>

</html>