# LaporBanjir (BPBD Kabupaten Bandung)

Prototipe sistem pelaporan banjir — Laravel + Blade Template, tanpa database (data berupa array di Controller).

## Menjalankan
```
composer install
php artisan serve
```
Buka http://127.0.0.1:8000

## Halaman
| Route | Nama | Keterangan |
|---|---|---|
| GET /laporan | laporan.form | Form pelaporan |
| POST /laporan/konfirmasi | laporan.konfirmasi | Konfirmasi data terkirim (`<x-alert>`) |
| GET /laporan/daftar | laporan.daftar | Daftar laporan + status |

Status genangan: < 30 cm Waspada, 30–70 cm Siaga, > 70 cm Awas.

## Struktur Blade
- `layouts/app.blade.php` — layout utama (`@yield`)
- `laporan/*.blade.php` — `@extends`, `@section`
- `partials/laporan-card.blade.php` — `@include`
- `components/alert.blade.php` — `<x-alert>`
