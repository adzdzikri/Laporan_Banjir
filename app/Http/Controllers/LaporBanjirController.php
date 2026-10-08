<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    // Halaman form pelaporan
    public function form()
    {
        return view('laporan.form');
     }

    // Halaman konfirmasi (menerima POST dari form)
    public function konfirmasi(Request $request)
    {
        $data = $request->validate([
            'nama'   => 'required|string|max:100',
            'lokasi' => 'required|string|max:150',
            'tinggi' => 'required|numeric|min:0',
        ]);

        return view('laporan.konfirmasi', compact('data'));
    }

    // Halaman daftar laporan (data array, tanpa database)
    public function daftar()
    {
        $laporan = [
            ['nama' => 'Budi Santoso', 'lokasi' => 'Baleendah',   'tinggi' => 25],
            ['nama' => 'Siti Aminah',  'lokasi' => 'Dayeuhkolot', 'tinggi' => 50],
            ['nama' => 'Agus Salim',   'lokasi' => 'Bojongsoang', 'tinggi' => 85],
            ['nama' => 'Rina Marlina', 'lokasi' => 'Rancaekek',   'tinggi' => 70],
        ];

        return view('laporan.daftar', compact('laporan'));
    }
}
