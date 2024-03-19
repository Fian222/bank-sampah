@extends('layout.app')

@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <link rel="stylesheet" href="./assets/compiled/css/all.view.css">

    <div class="back-button-container" style="margin-bottom: 15px">
        <a class="btn back-button" onclick="goBack()">
            <i class="fa-solid fa-arrow-left" style="color: white;"></i>
            <span style="color: white;">Back</span>
        </a>
    </div>

    <div class="card border-bottom-primary shadow mb-4" style="margin-right: 28px">
        <div class="card-header py-3">
            <h6 class="m-0">Form Edit Transaksi Jual</h6>
        </div>
        <div class="card-body">
            <form action="/transaksi-jual/store" method="post">
                @csrf

                <div class="form-group">
                    <label for="id_jual">ID Jual</label>
                    <input type="text" class="form-control" id="id_jual" name="id_jual" style="cursor: not-allowed;"
                        disabled="disabled" required placeholder="ID Jual">
                </div>

                <div class="form-group">
                    <label for="tanggal_jual">Tanggal Jual*</label>
                    <input type="date" class="form-control" id="tanggal_jual" name="tanggal_jual" required>
                </div>

                <div class="form-group">
                    <label for="jenis_sampah">Jenis Sampah*</label>
                    <input type="text" class="form-control" id="jenis_sampah" name="jenis_sampah" required
                        placeholder="Jenis Sampah">
                </div>

                <div class="form-group">
                    <label for="gambar">Gambar*</label>
                    <input type="file" class="form-control-file" id="gambar" name="gambar" required>
                </div>

                <div class="form-group">
                    <label for="berat">Berat (Kg)*</label>
                    <input type="number" step="0.01" class="form-control" id="berat" name="berat" required
                        placeholder="Berat">
                </div>

                <div class="form-group">
                    <label for="harga">Harga (Rp)*</label>
                    <input type="number" class="form-control" id="harga" name="harga" required placeholder="Harga">
                </div>

                <div class="form-group">
                    <label for="total">Total (Rp)*</label>
                    <input type="number" class="form-control" id="total" name="total" required placeholder="Total">
                </div>

                <div class="form-group">
                    <label for="id_user">ID User*</label>
                    <input type="text" class="form-control" id="id_user" name="id_user" required placeholder="ID User">
                </div>

                <button type="submit" class="btn btn-custom">Simpan</button>
            </form>
        </div>
    </div>
@endsection
