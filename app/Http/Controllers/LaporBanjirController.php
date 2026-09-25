<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function kirim(Request $request)
    {
        $nama = $request->nama;
        $lokasi = $request->lokasi;
        $tinggi = $request->tinggi;

        return view('konfirmasi', [
            'nama' => $nama,
            'lokasi' => $lokasi,
            'tinggi' => $tinggi
        ]);
    }
}