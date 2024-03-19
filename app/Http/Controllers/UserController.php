<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;

class UserController extends Controller
{
    public function index()
    {
        return view("user/dashboard");
    }

    // public function daftar_sampah(){
    //     return view('lurah/daftar_sampah', [
    //         "sampah" => Sampah::all()
    //     ]);
    // }

    public function cari_sampah()
    {
        return view('lurah/cari_sampah');
    }

    public function transaksi_jual()
    {
        return view('lurah/transaksi_jual');
    }

    public function transaksi_beli()
    {
        return view('lurah/transaksi_beli');
    }

    public function laporan_jual()
    {
        return view('lurah/laporan_jual');
    }

    public function laporan_beli()
    {
        return view('lurah/laporan_beli');
    }

    public function laporan_akhir()
    {
        return view('lurah/laporan_akhir');
    }

    public function grafik_monitoring()
    {
        return view('lurah/grafik_monitoring');
    }
}
