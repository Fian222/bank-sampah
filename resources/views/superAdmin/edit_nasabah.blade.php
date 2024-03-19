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

    <div class="card border-bottom-primary shadow mb-4" style= "margin-right: 28px">

        <div class="card-header py-3">
            <h6 class="m-0">Form Edit Data Nasabah</h6>
        </div>
        <div class="card-body">
            <form action="/nasabah/store" method="post">
                @csrf

                <div class="form-group">
                    <label for="id_nasabah">ID Nasabah</label>
                    <input type="text" class="form-control" id="id_nasabah" name="id_nasabah"
                        style="cursor: not-allowed;" disabled="disabled" required placeholder="ID Nasabah">
                </div>

                <div class="form-group">
                    <label for="nama_nasabah">Nama*</label>
                    <input type="text" class="form-control" id="nama_nasabah" name="nama_nasabah" required
                        placeholder="Nama">
                </div>

                <div class="form-group">
                    <label for="telepon">Telepon*</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" required
                        placeholder="Nomor Telepon">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat*</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" required placeholder="Alamat lengkap"></textarea>
                </div>

                <div class="form-group">
                    <label for="RW">RW*</label>
                    <input type="text" class="form-control" id="RW" name="RW" required placeholder="RW">
                </div>

                <div class="form-group">
                    <label for="sampah">Sampah*</label>
                    <input type="text" class="form-control" id="sampah" name="sampah" required
                        placeholder="Jenis Sampah">
                </div>

                <button type="submit" class="btn btn-custom">Simpan</button>
            </form>
        </div>
    </div>
@endsection
