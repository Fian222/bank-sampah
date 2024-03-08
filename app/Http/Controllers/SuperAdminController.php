<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuperAdmin;

class SuperAdminController extends Controller
{
    public function index()
    {
        return view("superadmin/dashboard");
    }

    public function data_admin()
    {
        return view('superadmin/data_admin');
    }

    public function tambah_admin()
    {
        return view("superadmin/tambah_admin");
    }

    public function edit_admin()
    {
        return view("superadmin/edit_admin");
    }

    public function hapus_admin()
    {
        return view("superadmin/hapus_admin");
    }

    public function data_nasabah()
    {
        return view('superadmin/data_nasabah');
    }

    public function tambah_nasabah()
    {
        return view("superadmin/tambah_nasabah");
    }

    public function edit_nasabah()
    {
        return view("superadmin/edit_nasabah");
    }

    public function hapus_nasabah()
    {
        return view("superadmin/hapus_nasabah");
    }

    public function data_sampah()
    {
        return view('superadmin/data_sampah');
    }

    public function tambah_sampah()
    {
        return view("superadmin/tambah_sampah");
    }

    public function edit_sampah()
    {
        return view("superadmin/edit_sampah");
    }

    public function hapus_sampah()
    {
        return view("superadmin/hapus_sampah");
    }

    public function cari_sampah(){
        return view('superadmin/cari_sampah');
    }

    public function transaksi_jual(){
        return view('superadmin/transaksi_jual');
    }

    public function tambah_transaksi_jual(){
        return view('superadmin/tambah_transaksi_jual');
    }

    public function edit_transaksi_jual(){
        return view('superadmin/edit_transaksi_jual');
    }

    public function hapus_transaksi_jual(){
        return view('superadmin/hapus_transaksi_jual');
    }

    public function transaksi_beli(){
        return view('superadmin/transaksi_beli');
    }

    public function tambah_transaksi_beli(){
        return view('superadmin/tambah_transaksi_beli');
    }

    public function edit_transaksi_beli(){
        return view('superadmin/edit_transaksi_beli');
    }

    public function hapus_transaksi_beli(){
        return view('superadmin/hapus_transaksi_beli');
    }

    public function laporan_jual(){
        return view('superadmin/laporan_jual');
    }

    public function laporan_beli(){
        return view('superadmin/laporan_beli');
    }

    public function laporan_akhir(){
        return view('superadmin/laporan_akhir');
    }

    public function grafik_monitoring(){
        return view('superadmin/grafik_monitoring');
    }
}
