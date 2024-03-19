@extends('layout.app')

@section('content')
    <h2 style="font-size: 30px;">Data Sampah</h2>
    <br>

    <link rel="stylesheet" href="./assets/compiled/css/all.view.css">
    <link rel="stylesheet" href="./assets/compiled/css/dataTables.bootstrap4.min.css">

    <div class="back-button-container" style="margin-bottom: 5px; margin-left: 1px;">
        <a class="btn back-button" onclick="goBack()">
            <i class="fa-solid fa-arrow-left" style="color: white;"></i>
            <span style="color: white;">Back</span>
        </a>
    </div>

    <div class="mb-3"></div>
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table_sampah" class="table table-bordered">
                            <thead class="table-secondary">
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Sampah</th>
                                    <th>Satuan</th>
                                    <th>Harga</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                                <tr>
                                    <td>1</td>
                                    <td>Kardus</td>
                                    <td>KG</td>
                                    <td>5000</td>
                                    <td><img src="https://down-id.img.susercontent.com/file/d41d0ab1c03c710ae114912cf4297f74"width="60px"
                                            height="60px"></td>
                                    <td>Semua Jenis Kardus</td>
                                    <td style="text-align: center;">
                                        <a href="{{ route('edit_user') }}" class="btn btn-warning btn-sm"
                                            style="color: white"> <i class="fas fa-edit"></i> </a>
                                        <a type="submit" class="btn btn-danger btn-sm" onclick="return confirmDelete()"><i
                                                class="fas fa-trash"></i> </a>
                                    </td>
                                </tr>
                                <tr id="tableBody">
                                    <td>2</td>
                                    <td>Botol</td>
                                    <td>KG</td>
                                    <td>3000</td>
                                    <td><img src="https://st4.depositphotos.com/1971587/25483/i/1600/depositphotos_254834222-stock-photo-new-unused-blue-empty-plastic.jpg"
                                            width="60px" height="60px"></td>
                                    <td>Botol Tanpa Tutup</td>
                                    <td style="text-align: center;">
                                        <a href="{{ route('edit_user') }}" class="btn btn-warning btn-sm"
                                            style="color: white"> <i class="fas fa-edit"></i> </a>
                                        <a type="submit" class="btn btn-danger btn-sm" onclick="return confirmDelete()"><i
                                                class="fas fa-trash"></i> </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('tambah_user') }}" class="btn btn-custom">
                                <i class="fa-solid fa-user-plus" style="color: white; margin-right: 5px;"></i>
                                <span style="color: white;">Tambah</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="/assets/compiled/js/jquery.min.js"></script>
    <script src="/assets/compiled/js/jquery.dataTables.min.js"></script>
    <script src="/assets/compiled/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#table_sampah').DataTable();
        });
    </script>
@endsection
