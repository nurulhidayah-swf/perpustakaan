<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;

class PengunjungController extends Controller
{
    public function index()
    {
        $pengunjung = Pengunjung::orderBy('tanggal_kunjungan', 'desc')->get();

        return view('pengunjung.index', compact('pengunjung'));
    }
}
