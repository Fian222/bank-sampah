<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view("user/dashboard");
    }

    public function data_nasabah()
    {
        return view('user/data_nasabah_user');
    }

    public function data_sampah()
    {
        return view('user/data_sampah_user');
    }


    public function transaksi_jual(){
        return view('user/transaksi_jual_user');
    }

    public function transaksi_beli(){
        return view('user/transaksi_beli_user');
    }


    public function laporan_jual(){
        return view('user/laporan_jual_user');
    }

    public function laporan_beli(){
        return view('user/laporan_beli_user');
    }

    public function laporan_akhir(){
        return view('user/laporan_akhir');
    }

    public function ganti_password(){
        return view('user/ganti_password_user');
    }

}
